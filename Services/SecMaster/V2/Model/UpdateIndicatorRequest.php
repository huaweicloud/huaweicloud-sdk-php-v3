<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateIndicatorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateIndicatorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * indicatorId  威胁情报ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'indicatorId' => 'string',
            'body' => '\HuaweiCloud\SDK\SecMaster\V2\Model\UpdateIndicatorRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * indicatorId  威胁情报ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'indicatorId' => null,
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
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * indicatorId  威胁情报ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'indicatorId' => 'indicator_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * indicatorId  威胁情报ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'indicatorId' => 'setIndicatorId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * indicatorId  威胁情报ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'indicatorId' => 'getIndicatorId',
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['indicatorId'] = isset($data['indicatorId']) ? $data['indicatorId'] : null;
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
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['indicatorId'] === null) {
            $invalidProperties[] = "'indicatorId' can't be null";
        }
            if ((mb_strlen($this->container['indicatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indicatorId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['indicatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'indicatorId', the character length must be bigger than or equal to 32.";
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
    * Gets contentType
    *  application/json;charset=UTF-8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType application/json;charset=UTF-8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets indicatorId
    *  威胁情报ID
    *
    * @return string
    */
    public function getIndicatorId()
    {
        return $this->container['indicatorId'];
    }

    /**
    * Sets indicatorId
    *
    * @param string $indicatorId 威胁情报ID
    *
    * @return $this
    */
    public function setIndicatorId($indicatorId)
    {
        $this->container['indicatorId'] = $indicatorId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\UpdateIndicatorRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\UpdateIndicatorRequestBody|null $body body
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

