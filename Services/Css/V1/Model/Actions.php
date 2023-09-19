<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Actions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'actions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  操作记录id。
    * actionType  操作类型。
    * confContent  配置文件内容。
    * status  操作状态。
    * updateAt  更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * errorMsg  错误信息。当操作状态为success时该字段为null。
    * message  内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'actionType' => 'string',
            'confContent' => 'string',
            'status' => 'string',
            'updateAt' => 'string',
            'errorMsg' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  操作记录id。
    * actionType  操作类型。
    * confContent  配置文件内容。
    * status  操作状态。
    * updateAt  更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * errorMsg  错误信息。当操作状态为success时该字段为null。
    * message  内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'actionType' => null,
        'confContent' => null,
        'status' => null,
        'updateAt' => null,
        'errorMsg' => null,
        'message' => null
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
    * id  操作记录id。
    * actionType  操作类型。
    * confContent  配置文件内容。
    * status  操作状态。
    * updateAt  更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * errorMsg  错误信息。当操作状态为success时该字段为null。
    * message  内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'actionType' => 'actionType',
            'confContent' => 'confContent',
            'status' => 'status',
            'updateAt' => 'updateAt',
            'errorMsg' => 'errorMsg',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  操作记录id。
    * actionType  操作类型。
    * confContent  配置文件内容。
    * status  操作状态。
    * updateAt  更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * errorMsg  错误信息。当操作状态为success时该字段为null。
    * message  内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'actionType' => 'setActionType',
            'confContent' => 'setConfContent',
            'status' => 'setStatus',
            'updateAt' => 'setUpdateAt',
            'errorMsg' => 'setErrorMsg',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  操作记录id。
    * actionType  操作类型。
    * confContent  配置文件内容。
    * status  操作状态。
    * updateAt  更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * errorMsg  错误信息。当操作状态为success时该字段为null。
    * message  内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'actionType' => 'getActionType',
            'confContent' => 'getConfContent',
            'status' => 'getStatus',
            'updateAt' => 'getUpdateAt',
            'errorMsg' => 'getErrorMsg',
            'message' => 'getMessage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['confContent'] = isset($data['confContent']) ? $data['confContent'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets id
    *  操作记录id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 操作记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets actionType
    *  操作类型。
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType 操作类型。
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets confContent
    *  配置文件内容。
    *
    * @return string|null
    */
    public function getConfContent()
    {
        return $this->container['confContent'];
    }

    /**
    * Sets confContent
    *
    * @param string|null $confContent 配置文件内容。
    *
    * @return $this
    */
    public function setConfContent($confContent)
    {
        $this->container['confContent'] = $confContent;
        return $this;
    }

    /**
    * Gets status
    *  操作状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 操作状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息。当操作状态为success时该字段为null。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息。当操作状态为success时该字段为null。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets message
    *  内容。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 内容。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

