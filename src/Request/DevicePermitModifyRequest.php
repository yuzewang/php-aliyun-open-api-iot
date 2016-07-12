<?php namespace Aliyun\IOT\Request;
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
use Aliyun\Core\RpcAcsRequest;

class DevicePermitModifyRequest extends RpcAcsRequest {
	function __construct() {
		parent::__construct("Iot", "2016-01-04", "DevicePermitModify");
	}

	private $appKey;

	private $ruleId;

	private $deviceId;

	private $topicFullName;

	private $grantType;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"] = $appKey;
	}

	public function getRuleId() {
		return $this->ruleId;
	}

	public function setRuleId($ruleId) {
		$this->ruleId = $ruleId;
		$this->queryParameters["RuleId"] = $ruleId;
	}

	public function getDeviceId() {
		return $this->deviceId;
	}

	public function setDeviceId($deviceId) {
		$this->deviceId = $deviceId;
		$this->queryParameters["DeviceId"] = $deviceId;
	}

	public function getTopicFullName() {
		return $this->topicFullName;
	}

	public function setTopicFullName($topicFullName) {
		$this->topicFullName = $topicFullName;
		$this->queryParameters["TopicFullName"] = $topicFullName;
	}

	public function getGrantType() {
		return $this->grantType;
	}

	public function setGrantType($grantType) {
		$this->grantType = $grantType;
		$this->queryParameters["GrantType"] = $grantType;
	}

}