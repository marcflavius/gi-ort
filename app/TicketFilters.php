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

    public function priority($priority = null)
    {
        return $priority === null ? $this->builder
            : $this->builder->where('priority', $priority);
    }

    public function type($type = null)
    {
        return $type === null ? $this->builder
            : $this->builder->where('type', $type);
    }


}