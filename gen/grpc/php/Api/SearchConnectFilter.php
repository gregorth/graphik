<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphik.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.SearchConnectFilter</code>
 */
class SearchConnectFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.Filter filter = 1;</code>
     */
    private $filter = null;
    /**
     * Generated from protobuf field <code>string gtype = 2;</code>
     */
    private $gtype = '';
    /**
     * attributes are k/v pairs
     *
     * Generated from protobuf field <code>.google.protobuf.Struct attributes = 3;</code>
     */
    private $attributes = null;
    /**
     * directed is false if the connection is bi-directional
     *
     * Generated from protobuf field <code>bool directed = 4;</code>
     */
    private $directed = false;
    /**
     * from is the doc ref that is the root of the connection
     *
     * Generated from protobuf field <code>.api.Ref from = 5 [(.validator.field) = {</code>
     */
    private $from = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\Filter $filter
     *     @type string $gtype
     *     @type \Google\Protobuf\Struct $attributes
     *           attributes are k/v pairs
     *     @type bool $directed
     *           directed is false if the connection is bi-directional
     *     @type \Api\Ref $from
     *           from is the doc ref that is the root of the connection
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Graphik::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.api.Filter filter = 1;</code>
     * @return \Api\Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Generated from protobuf field <code>.api.Filter filter = 1;</code>
     * @param \Api\Filter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Api\Filter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gtype = 2;</code>
     * @return string
     */
    public function getGtype()
    {
        return $this->gtype;
    }

    /**
     * Generated from protobuf field <code>string gtype = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGtype($var)
    {
        GPBUtil::checkString($var, True);
        $this->gtype = $var;

        return $this;
    }

    /**
     * attributes are k/v pairs
     *
     * Generated from protobuf field <code>.google.protobuf.Struct attributes = 3;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * attributes are k/v pairs
     *
     * Generated from protobuf field <code>.google.protobuf.Struct attributes = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->attributes = $var;

        return $this;
    }

    /**
     * directed is false if the connection is bi-directional
     *
     * Generated from protobuf field <code>bool directed = 4;</code>
     * @return bool
     */
    public function getDirected()
    {
        return $this->directed;
    }

    /**
     * directed is false if the connection is bi-directional
     *
     * Generated from protobuf field <code>bool directed = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDirected($var)
    {
        GPBUtil::checkBool($var);
        $this->directed = $var;

        return $this;
    }

    /**
     * from is the doc ref that is the root of the connection
     *
     * Generated from protobuf field <code>.api.Ref from = 5 [(.validator.field) = {</code>
     * @return \Api\Ref
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * from is the doc ref that is the root of the connection
     *
     * Generated from protobuf field <code>.api.Ref from = 5 [(.validator.field) = {</code>
     * @param \Api\Ref $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Api\Ref::class);
        $this->from = $var;

        return $this;
    }

}

