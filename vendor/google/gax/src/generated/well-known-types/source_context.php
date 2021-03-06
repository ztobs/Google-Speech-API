<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/protobuf/source_context.proto
//   Date: 2016-07-18 20:27:54

namespace google\protobuf {

  class SourceContext extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $file_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.SourceContext');

      // OPTIONAL STRING file_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "file_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <file_name> has a value
     *
     * @return boolean
     */
    public function hasFileName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <file_name> value
     *
     * @return \google\protobuf\SourceContext
     */
    public function clearFileName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <file_name> value
     *
     * @return string
     */
    public function getFileName(){
      return $this->_get(1);
    }
    
    /**
     * Set <file_name> value
     *
     * @param string $value
     * @return \google\protobuf\SourceContext
     */
    public function setFileName( $value){
      return $this->_set(1, $value);
    }
  }
}

