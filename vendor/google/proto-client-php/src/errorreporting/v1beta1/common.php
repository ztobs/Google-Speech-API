<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/devtools/clouderrorreporting/v1beta1/common.proto
//   Date: 2016-12-21 23:03:50

namespace google\devtools\clouderrorreporting\v1beta1 {

  class ErrorGroup extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $group_id = null;
    
    /**  @var \google\devtools\clouderrorreporting\v1beta1\TrackingIssue[]  */
    public $tracking_issues = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.ErrorGroup');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING group_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE tracking_issues = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "tracking_issues";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\devtools\clouderrorreporting\v1beta1\TrackingIssue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <group_id> has a value
     *
     * @return boolean
     */
    public function hasGroupId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <group_id> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function clearGroupId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <group_id> value
     *
     * @return string
     */
    public function getGroupId(){
      return $this->_get(2);
    }
    
    /**
     * Set <group_id> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function setGroupId( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <tracking_issues> has a value
     *
     * @return boolean
     */
    public function hasTrackingIssues(){
      return $this->_has(3);
    }
    
    /**
     * Clear <tracking_issues> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function clearTrackingIssues(){
      return $this->_clear(3);
    }
    
    /**
     * Get <tracking_issues> value
     *
     * @param int $idx
     * @return \google\devtools\clouderrorreporting\v1beta1\TrackingIssue
     */
    public function getTrackingIssues($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <tracking_issues> value
     *
     * @param \google\devtools\clouderrorreporting\v1beta1\TrackingIssue $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function setTrackingIssues(\google\devtools\clouderrorreporting\v1beta1\TrackingIssue $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <tracking_issues>
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\TrackingIssue[]
     */
    public function getTrackingIssuesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <tracking_issues>
     *
     * @param \google\devtools\clouderrorreporting\v1beta1\TrackingIssue $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorGroup
     */
    public function addTrackingIssues(\google\devtools\clouderrorreporting\v1beta1\TrackingIssue $value){
     return $this->_add(3, $value);
    }
  }
}

namespace google\devtools\clouderrorreporting\v1beta1 {

  class TrackingIssue extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $url = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.TrackingIssue');

      // OPTIONAL STRING url = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <url> has a value
     *
     * @return boolean
     */
    public function hasUrl(){
      return $this->_has(1);
    }
    
    /**
     * Clear <url> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\TrackingIssue
     */
    public function clearUrl(){
      return $this->_clear(1);
    }
    
    /**
     * Get <url> value
     *
     * @return string
     */
    public function getUrl(){
      return $this->_get(1);
    }
    
    /**
     * Set <url> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\TrackingIssue
     */
    public function setUrl( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\devtools\clouderrorreporting\v1beta1 {

  class ErrorEvent extends \DrSlump\Protobuf\Message {

    /**  @var \google\protobuf\Timestamp */
    public $event_time = null;
    
    /**  @var \google\devtools\clouderrorreporting\v1beta1\ServiceContext */
    public $service_context = null;
    
    /**  @var string */
    public $message = null;
    
    /**  @var \google\devtools\clouderrorreporting\v1beta1\ErrorContext */
    public $context = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.ErrorEvent');

      // OPTIONAL MESSAGE event_time = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "event_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Timestamp';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE service_context = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "service_context";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\clouderrorreporting\v1beta1\ServiceContext';
      $descriptor->addField($f);

      // OPTIONAL STRING message = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE context = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "context";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\clouderrorreporting\v1beta1\ErrorContext';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <event_time> has a value
     *
     * @return boolean
     */
    public function hasEventTime(){
      return $this->_has(1);
    }
    
    /**
     * Clear <event_time> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function clearEventTime(){
      return $this->_clear(1);
    }
    
    /**
     * Get <event_time> value
     *
     * @return \google\protobuf\Timestamp
     */
    public function getEventTime(){
      return $this->_get(1);
    }
    
    /**
     * Set <event_time> value
     *
     * @param \google\protobuf\Timestamp $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function setEventTime(\google\protobuf\Timestamp $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <service_context> has a value
     *
     * @return boolean
     */
    public function hasServiceContext(){
      return $this->_has(2);
    }
    
    /**
     * Clear <service_context> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function clearServiceContext(){
      return $this->_clear(2);
    }
    
    /**
     * Get <service_context> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function getServiceContext(){
      return $this->_get(2);
    }
    
    /**
     * Set <service_context> value
     *
     * @param \google\devtools\clouderrorreporting\v1beta1\ServiceContext $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function setServiceContext(\google\devtools\clouderrorreporting\v1beta1\ServiceContext $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(3);
    }
    
    /**
     * Clear <message> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function clearMessage(){
      return $this->_clear(3);
    }
    
    /**
     * Get <message> value
     *
     * @return string
     */
    public function getMessage(){
      return $this->_get(3);
    }
    
    /**
     * Set <message> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function setMessage( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <context> has a value
     *
     * @return boolean
     */
    public function hasContext(){
      return $this->_has(5);
    }
    
    /**
     * Clear <context> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function clearContext(){
      return $this->_clear(5);
    }
    
    /**
     * Get <context> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function getContext(){
      return $this->_get(5);
    }
    
    /**
     * Set <context> value
     *
     * @param \google\devtools\clouderrorreporting\v1beta1\ErrorContext $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorEvent
     */
    public function setContext(\google\devtools\clouderrorreporting\v1beta1\ErrorContext $value){
      return $this->_set(5, $value);
    }
  }
}

namespace google\devtools\clouderrorreporting\v1beta1 {

  class ServiceContext extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $service = null;
    
    /**  @var string */
    public $version = null;
    
    /**  @var string */
    public $resource_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.ServiceContext');

      // OPTIONAL STRING service = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "service";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING version = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING resource_type = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "resource_type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <service> has a value
     *
     * @return boolean
     */
    public function hasService(){
      return $this->_has(2);
    }
    
    /**
     * Clear <service> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function clearService(){
      return $this->_clear(2);
    }
    
    /**
     * Get <service> value
     *
     * @return string
     */
    public function getService(){
      return $this->_get(2);
    }
    
    /**
     * Set <service> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function setService( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(3);
    }
    
    /**
     * Clear <version> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function clearVersion(){
      return $this->_clear(3);
    }
    
    /**
     * Get <version> value
     *
     * @return string
     */
    public function getVersion(){
      return $this->_get(3);
    }
    
    /**
     * Set <version> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function setVersion( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <resource_type> has a value
     *
     * @return boolean
     */
    public function hasResourceType(){
      return $this->_has(4);
    }
    
    /**
     * Clear <resource_type> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function clearResourceType(){
      return $this->_clear(4);
    }
    
    /**
     * Get <resource_type> value
     *
     * @return string
     */
    public function getResourceType(){
      return $this->_get(4);
    }
    
    /**
     * Set <resource_type> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ServiceContext
     */
    public function setResourceType( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\devtools\clouderrorreporting\v1beta1 {

  class ErrorContext extends \DrSlump\Protobuf\Message {

    /**  @var \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext */
    public $http_request = null;
    
    /**  @var string */
    public $user = null;
    
    /**  @var \google\devtools\clouderrorreporting\v1beta1\SourceLocation */
    public $report_location = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.ErrorContext');

      // OPTIONAL MESSAGE http_request = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "http_request";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\clouderrorreporting\v1beta1\HttpRequestContext';
      $descriptor->addField($f);

      // OPTIONAL STRING user = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "user";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE report_location = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "report_location";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\clouderrorreporting\v1beta1\SourceLocation';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <http_request> has a value
     *
     * @return boolean
     */
    public function hasHttpRequest(){
      return $this->_has(1);
    }
    
    /**
     * Clear <http_request> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function clearHttpRequest(){
      return $this->_clear(1);
    }
    
    /**
     * Get <http_request> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function getHttpRequest(){
      return $this->_get(1);
    }
    
    /**
     * Set <http_request> value
     *
     * @param \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function setHttpRequest(\google\devtools\clouderrorreporting\v1beta1\HttpRequestContext $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <user> has a value
     *
     * @return boolean
     */
    public function hasUser(){
      return $this->_has(2);
    }
    
    /**
     * Clear <user> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function clearUser(){
      return $this->_clear(2);
    }
    
    /**
     * Get <user> value
     *
     * @return string
     */
    public function getUser(){
      return $this->_get(2);
    }
    
    /**
     * Set <user> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function setUser( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <report_location> has a value
     *
     * @return boolean
     */
    public function hasReportLocation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <report_location> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function clearReportLocation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <report_location> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function getReportLocation(){
      return $this->_get(3);
    }
    
    /**
     * Set <report_location> value
     *
     * @param \google\devtools\clouderrorreporting\v1beta1\SourceLocation $value
     * @return \google\devtools\clouderrorreporting\v1beta1\ErrorContext
     */
    public function setReportLocation(\google\devtools\clouderrorreporting\v1beta1\SourceLocation $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\devtools\clouderrorreporting\v1beta1 {

  class HttpRequestContext extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $method = null;
    
    /**  @var string */
    public $url = null;
    
    /**  @var string */
    public $user_agent = null;
    
    /**  @var string */
    public $referrer = null;
    
    /**  @var int */
    public $response_status_code = null;
    
    /**  @var string */
    public $remote_ip = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.HttpRequestContext');

      // OPTIONAL STRING method = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "method";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING url = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING user_agent = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "user_agent";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING referrer = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "referrer";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 response_status_code = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "response_status_code";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING remote_ip = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "remote_ip";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <method> has a value
     *
     * @return boolean
     */
    public function hasMethod(){
      return $this->_has(1);
    }
    
    /**
     * Clear <method> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function clearMethod(){
      return $this->_clear(1);
    }
    
    /**
     * Get <method> value
     *
     * @return string
     */
    public function getMethod(){
      return $this->_get(1);
    }
    
    /**
     * Set <method> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function setMethod( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <url> has a value
     *
     * @return boolean
     */
    public function hasUrl(){
      return $this->_has(2);
    }
    
    /**
     * Clear <url> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function clearUrl(){
      return $this->_clear(2);
    }
    
    /**
     * Get <url> value
     *
     * @return string
     */
    public function getUrl(){
      return $this->_get(2);
    }
    
    /**
     * Set <url> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function setUrl( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <user_agent> has a value
     *
     * @return boolean
     */
    public function hasUserAgent(){
      return $this->_has(3);
    }
    
    /**
     * Clear <user_agent> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function clearUserAgent(){
      return $this->_clear(3);
    }
    
    /**
     * Get <user_agent> value
     *
     * @return string
     */
    public function getUserAgent(){
      return $this->_get(3);
    }
    
    /**
     * Set <user_agent> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function setUserAgent( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <referrer> has a value
     *
     * @return boolean
     */
    public function hasReferrer(){
      return $this->_has(4);
    }
    
    /**
     * Clear <referrer> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function clearReferrer(){
      return $this->_clear(4);
    }
    
    /**
     * Get <referrer> value
     *
     * @return string
     */
    public function getReferrer(){
      return $this->_get(4);
    }
    
    /**
     * Set <referrer> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function setReferrer( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <response_status_code> has a value
     *
     * @return boolean
     */
    public function hasResponseStatusCode(){
      return $this->_has(5);
    }
    
    /**
     * Clear <response_status_code> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function clearResponseStatusCode(){
      return $this->_clear(5);
    }
    
    /**
     * Get <response_status_code> value
     *
     * @return int
     */
    public function getResponseStatusCode(){
      return $this->_get(5);
    }
    
    /**
     * Set <response_status_code> value
     *
     * @param int $value
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function setResponseStatusCode( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <remote_ip> has a value
     *
     * @return boolean
     */
    public function hasRemoteIp(){
      return $this->_has(6);
    }
    
    /**
     * Clear <remote_ip> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function clearRemoteIp(){
      return $this->_clear(6);
    }
    
    /**
     * Get <remote_ip> value
     *
     * @return string
     */
    public function getRemoteIp(){
      return $this->_get(6);
    }
    
    /**
     * Set <remote_ip> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\HttpRequestContext
     */
    public function setRemoteIp( $value){
      return $this->_set(6, $value);
    }
  }
}

namespace google\devtools\clouderrorreporting\v1beta1 {

  class SourceLocation extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $file_path = null;
    
    /**  @var int */
    public $line_number = null;
    
    /**  @var string */
    public $function_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.clouderrorreporting.v1beta1.SourceLocation');

      // OPTIONAL STRING file_path = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "file_path";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 line_number = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "line_number";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING function_name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "function_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <file_path> has a value
     *
     * @return boolean
     */
    public function hasFilePath(){
      return $this->_has(1);
    }
    
    /**
     * Clear <file_path> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function clearFilePath(){
      return $this->_clear(1);
    }
    
    /**
     * Get <file_path> value
     *
     * @return string
     */
    public function getFilePath(){
      return $this->_get(1);
    }
    
    /**
     * Set <file_path> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function setFilePath( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <line_number> has a value
     *
     * @return boolean
     */
    public function hasLineNumber(){
      return $this->_has(2);
    }
    
    /**
     * Clear <line_number> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function clearLineNumber(){
      return $this->_clear(2);
    }
    
    /**
     * Get <line_number> value
     *
     * @return int
     */
    public function getLineNumber(){
      return $this->_get(2);
    }
    
    /**
     * Set <line_number> value
     *
     * @param int $value
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function setLineNumber( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <function_name> has a value
     *
     * @return boolean
     */
    public function hasFunctionName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <function_name> value
     *
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function clearFunctionName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <function_name> value
     *
     * @return string
     */
    public function getFunctionName(){
      return $this->_get(4);
    }
    
    /**
     * Set <function_name> value
     *
     * @param string $value
     * @return \google\devtools\clouderrorreporting\v1beta1\SourceLocation
     */
    public function setFunctionName( $value){
      return $this->_set(4, $value);
    }
  }
}

