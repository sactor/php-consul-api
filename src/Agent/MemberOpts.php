<?php namespace DCarbone\PHPConsulAPI\Agent;

/*
   Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractModel;

/**
 * Class MemberOpts
 * @package DCarbone\PHPConsulAPI\Agent
 */
class MemberOpts extends AbstractModel {
    /** @var bool */
    public $WAN = false;
    /** @var string */
    public $Segment = '';

    /**
     * @return bool
     */
    public function isWAN(): bool {
        return $this->WAN;
    }

    /**
     * @param bool $wan
     * @return \DCarbone\PHPConsulAPI\Agent\MemberOpts
     */
    public function setWAN(bool $wan): MemberOpts {
        $this->WAN = $wan;
        return $this;
    }

    /**
     * @return string
     */
    public function getSegment(): string {
        return $this->Segment;
    }

    /**
     * @param string $segment
     * @return \DCarbone\PHPConsulAPI\Agent\MemberOpts
     */
    public function setSegment(string $segment): MemberOpts {
        $this->Segment = $segment;
        return $this;
    }
}