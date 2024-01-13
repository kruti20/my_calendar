<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;
use Illuminate\Support\Facades\Log;

class Calendar extends Component
{
    public $calendarDateData;
    public function render()
    {
        $this->getCalendarDateData();
        $events = Event::select('event_id','type','meeting_address','location','start_date_time','end_date_time')->get();
        //Log::info($events);
        return view('livewire.calendar');
    }

    protected function getCalendarDateData()
    {
        $this->calendarDateData = array();
        $this->calendarDateData['currentYear'] = date('Y');
        //check the current day
        $this->calendarDateData['weekStartDate'] = date('d M'); 
        $this->calendarDateData['weekEndDate'] = date('d M'); 
        if(date('D')!='Sun')
        {    
            //take the last monday
            $this->calendarDateData['weekStartDate'] = date('d M',strtotime('last Sunday'));    
        }else{
            $this->calendarDateData['weekStartDate'] = date('d M');   
        }

        //always next saturday

        if(date('D')!='Sat')
        {
            $this->calendarDateData['weekEndDate'] = date('d M',strtotime('next Saturday'));
        }else{
            $this->calendarDateData['weekEndDate'] = date('d M');
        }

        /* get all days of week */
        $today = time();
        $wday = date('w', $today);   
        $this->calendarDateData['weeks_day'] = array();
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 0)*86400);
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 1)*86400);
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 2)*86400);
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 3)*86400);
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 4)*86400);
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 5)*86400);
        $this->calendarDateData['weeks_day'][] = date('d D', $today - ($wday - 6)*86400);
    }

}
