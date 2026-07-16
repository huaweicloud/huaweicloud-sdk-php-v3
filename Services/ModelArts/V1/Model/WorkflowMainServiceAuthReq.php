<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowMainServiceAuthReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowMainServiceAuthReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mainServiceId  在线服务ID。
    * contentId  Gallery资产ID。
    * consume  consume
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mainServiceId' => 'string',
            'contentId' => 'string',
            'consume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConsume'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mainServiceId  在线服务ID。
    * contentId  Gallery资产ID。
    * consume  consume
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mainServiceId' => null,
        'contentId' => null,
        'consume' => null
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
    * mainServiceId  在线服务ID。
    * contentId  Gallery资产ID。
    * consume  consume
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mainServiceId' => 'main_service_id',
            'contentId' => 'content_id',
            'consume' => 'consume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mainServiceId  在线服务ID。
    * contentId  Gallery资产ID。
    * consume  consume
    *
    * @var string[]
    */
    protected static $setters = [
            'mainServiceId' => 'setMainServiceId',
            'contentId' => 'setContentId',
            'consume' => 'setConsume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mainServiceId  在线服务ID。
    * contentId  Gallery资产ID。
    * consume  consume
    *
    * @var string[]
    */
    protected static $getters = [
            'mainServiceId' => 'getMainServiceId',
            'contentId' => 'getContentId',
            'consume' => 'getConsume'
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
        $this->container['mainServiceId'] = isset($data['mainServiceId']) ? $data['mainServiceId'] : null;
        $this->container['contentId'] = isset($data['contentId']) ? $data['contentId'] : null;
        $this->container['consume'] = isset($data['consume']) ? $data['consume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets mainServiceId
    *  在线服务ID。
    *
    * @return string|null
    */
    public function getMainServiceId()
    {
        return $this->container['mainServiceId'];
    }

    /**
    * Sets mainServiceId
    *
    * @param string|null $mainServiceId 在线服务ID。
    *
    * @return $this
    */
    public function setMainServiceId($mainServiceId)
    {
        $this->container['mainServiceId'] = $mainServiceId;
        return $this;
    }

    /**
    * Gets contentId
    *  Gallery资产ID。
    *
    * @return string|null
    */
    public function getContentId()
    {
        return $this->container['contentId'];
    }

    /**
    * Sets contentId
    *
    * @param string|null $contentId Gallery资产ID。
    *
    * @return $this
    */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;
        return $this;
    }

    /**
    * Gets consume
    *  consume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConsume|null
    */
    public function getConsume()
    {
        return $this->container['consume'];
    }

    /**
    * Sets consume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConsume|null $consume consume
    *
    * @return $this
    */
    public function setConsume($consume)
    {
        $this->container['consume'] = $consume;
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

