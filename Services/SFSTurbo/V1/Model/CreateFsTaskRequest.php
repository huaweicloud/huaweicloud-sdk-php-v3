<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFsTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFsTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareId' => 'string',
            'feature' => 'string',
            'body' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\FsDirReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareId' => null,
        'feature' => null,
        'body' => null
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
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareId' => 'share_id',
            'feature' => 'feature',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'shareId' => 'setShareId',
            'feature' => 'setFeature',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareId  文件系统id
    * feature  任务类型。例，DU任务取值为dir-usage
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'shareId' => 'getShareId',
            'feature' => 'getFeature',
            'body' => 'getBody'
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
        $this->container['shareId'] = isset($data['shareId']) ? $data['shareId'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shareId'] === null) {
            $invalidProperties[] = "'shareId' can't be null";
        }
        if ($this->container['feature'] === null) {
            $invalidProperties[] = "'feature' can't be null";
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
    * Gets shareId
    *  文件系统id
    *
    * @return string
    */
    public function getShareId()
    {
        return $this->container['shareId'];
    }

    /**
    * Sets shareId
    *
    * @param string $shareId 文件系统id
    *
    * @return $this
    */
    public function setShareId($shareId)
    {
        $this->container['shareId'] = $shareId;
        return $this;
    }

    /**
    * Gets feature
    *  任务类型。例，DU任务取值为dir-usage
    *
    * @return string
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string $feature 任务类型。例，DU任务取值为dir-usage
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\FsDirReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\FsDirReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

