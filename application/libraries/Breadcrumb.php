<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Breadcrumb
{
    // breadcrumb array
    private $breadcrumb = array();

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function push($page, $href)
    {
        if (!$page or !$href) return;

        $href = site_url($href);
        $this->breadcrumb[$href] = array('page' => $page, 'href' => $href);
    }

    public function unshift($page, $href)
    {
        if (!$page or !$href) return;

        $href = site_url($href);
        array_unshift($this->breadcrumbs, array('page' => $page, 'href' => $href));
    }

    public function show()
    {
        if ($this->breadcrumbs) {

            // set output variable
            $output = $this->tag_open;

            // construct output
            foreach ($this->breadcrumbs as $key => $crumb) {
                $keys = array_keys($this->breadcrumbs);
                if (end($keys) == $key) {
                    $output .= $this->crumb_last_open . '' . $crumb['page'] . '' . $this->crumb_close;
                } else {
                    $output .= $this->crumb_open . '<a href="' . $crumb['href'] . '">' . $crumb['page'] . '</a> ' . $this->crumb_divider . $this->crumb_close;
                }
            }

            // return output
            return $output . $this->tag_close . PHP_EOL;
        }

        // no crumbs
        return '';
    }

    public function get_array()
    {
        return $this->breadcrumb;
    }
}
