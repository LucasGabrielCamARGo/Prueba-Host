<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace SimpleCalendar\plugin_deps\Google\Service\Calendar;

/** @internal */
class EventReminder extends \SimpleCalendar\plugin_deps\Google\Model
{
    /**
     * @var string
     */
    public $method;
    /**
     * @var int
     */
    public $minutes;
    /**
     * @param string
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }
    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * @param int
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }
    /**
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(EventReminder::class, 'SimpleCalendar\\plugin_deps\\Google_Service_Calendar_EventReminder');
