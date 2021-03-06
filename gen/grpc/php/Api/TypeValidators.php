<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphik.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.TypeValidators</code>
 */
class TypeValidators extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .api.TypeValidator validators = 1;</code>
     */
    private $validators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\TypeValidator[]|\Google\Protobuf\Internal\RepeatedField $validators
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Graphik::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .api.TypeValidator validators = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * Generated from protobuf field <code>repeated .api.TypeValidator validators = 1;</code>
     * @param \Api\TypeValidator[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\TypeValidator::class);
        $this->validators = $arr;

        return $this;
    }

}

