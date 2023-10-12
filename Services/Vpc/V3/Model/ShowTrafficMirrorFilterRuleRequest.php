<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTrafficMirrorFilterRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTrafficMirrorFilterRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * trafficMirrorFilterRuleId  流量镜像筛选规则ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'trafficMirrorFilterRuleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * trafficMirrorFilterRuleId  流量镜像筛选规则ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'trafficMirrorFilterRuleId' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * projectId  项目ID
    * trafficMirrorFilterRuleId  流量镜像筛选规则ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'trafficMirrorFilterRuleId' => 'traffic_mirror_filter_rule_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * trafficMirrorFilterRuleId  流量镜像筛选规则ID
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'trafficMirrorFilterRuleId' => 'setTrafficMirrorFilterRuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * trafficMirrorFilterRuleId  流量镜像筛选规则ID
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'trafficMirrorFilterRuleId' => 'getTrafficMirrorFilterRuleId'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['trafficMirrorFilterRuleId'] = isset($data['trafficMirrorFilterRuleId']) ? $data['trafficMirrorFilterRuleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['trafficMirrorFilterRuleId'] === null) {
            $invalidProperties[] = "'trafficMirrorFilterRuleId' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets trafficMirrorFilterRuleId
    *  流量镜像筛选规则ID
    *
    * @return string
    */
    public function getTrafficMirrorFilterRuleId()
    {
        return $this->container['trafficMirrorFilterRuleId'];
    }

    /**
    * Sets trafficMirrorFilterRuleId
    *
    * @param string $trafficMirrorFilterRuleId 流量镜像筛选规则ID
    *
    * @return $this
    */
    public function setTrafficMirrorFilterRuleId($trafficMirrorFilterRuleId)
    {
        $this->container['trafficMirrorFilterRuleId'] = $trafficMirrorFilterRuleId;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

