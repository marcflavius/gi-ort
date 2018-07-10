<?php

namespace App;


class TicketFilters extends QueryFilter {


    /**
     * 
     */
    public function status($status = null)
    {
        return $status === null ? $this->builder
            : $this->builder->where('status', $status)->paginate(10);

    }


    public function category($id = null)
    {
        return $id === null ? $this->builder
            : $this->builder->where('category_id', $id);
    }

    public function priority($id = null)
    {
        return $id === null ? $this->builder
            : $this->builder->where('category_id', $id);
    }


}