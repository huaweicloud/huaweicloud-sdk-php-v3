<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiMock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiMock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * resultContent  返回结果
    * version  版本。字符长度不超过64
    * authorizerId  后端自定义认证ID
    * id  编号
    * registerTime  注册时间
    * status  后端状态   - 1： 有效
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remark' => 'string',
            'resultContent' => 'string',
            'version' => 'string',
            'authorizerId' => 'string',
            'id' => 'string',
            'registerTime' => '\DateTime',
            'status' => 'int',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * resultContent  返回结果
    * version  版本。字符长度不超过64
    * authorizerId  后端自定义认证ID
    * id  编号
    * registerTime  注册时间
    * status  后端状态   - 1： 有效
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remark' => null,
        'resultContent' => null,
        'version' => null,
        'authorizerId' => null,
        'id' => null,
        'registerTime' => 'date-time',
        'status' => 'int32',
        'updateTime' => 'date-time'
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
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * resultContent  返回结果
    * version  版本。字符长度不超过64
    * authorizerId  后端自定义认证ID
    * id  编号
    * registerTime  注册时间
    * status  后端状态   - 1： 有效
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remark' => 'remark',
            'resultContent' => 'result_content',
            'version' => 'version',
            'authorizerId' => 'authorizer_id',
            'id' => 'id',
            'registerTime' => 'register_time',
            'status' => 'status',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * resultContent  返回结果
    * version  版本。字符长度不超过64
    * authorizerId  后端自定义认证ID
    * id  编号
    * registerTime  注册时间
    * status  后端状态   - 1： 有效
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'remark' => 'setRemark',
            'resultContent' => 'setResultContent',
            'version' => 'setVersion',
            'authorizerId' => 'setAuthorizerId',
            'id' => 'setId',
            'registerTime' => 'setRegisterTime',
            'status' => 'setStatus',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * resultContent  返回结果
    * version  版本。字符长度不超过64
    * authorizerId  后端自定义认证ID
    * id  编号
    * registerTime  注册时间
    * status  后端状态   - 1： 有效
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'remark' => 'getRemark',
            'resultContent' => 'getResultContent',
            'version' => 'getVersion',
            'authorizerId' => 'getAuthorizerId',
            'id' => 'getId',
            'registerTime' => 'getRegisterTime',
            'status' => 'getStatus',
            'updateTime' => 'getUpdateTime'
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
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['resultContent'] = isset($data['resultContent']) ? $data['resultContent'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['authorizerId'] = isset($data['authorizerId']) ? $data['authorizerId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorizerId']) && !preg_match("/^[a-zA-Z0-9-_]{0,64}$/", $this->container['authorizerId'])) {
                $invalidProperties[] = "invalid value for 'authorizerId', must be conform to the pattern /^[a-zA-Z0-9-_]{0,64}$/.";
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
    * Gets remark
    *  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets resultContent
    *  返回结果
    *
    * @return string|null
    */
    public function getResultContent()
    {
        return $this->container['resultContent'];
    }

    /**
    * Sets resultContent
    *
    * @param string|null $resultContent 返回结果
    *
    * @return $this
    */
    public function setResultContent($resultContent)
    {
        $this->container['resultContent'] = $resultContent;
        return $this;
    }

    /**
    * Gets version
    *  版本。字符长度不超过64
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本。字符长度不超过64
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets authorizerId
    *  后端自定义认证ID
    *
    * @return string|null
    */
    public function getAuthorizerId()
    {
        return $this->container['authorizerId'];
    }

    /**
    * Sets authorizerId
    *
    * @param string|null $authorizerId 后端自定义认证ID
    *
    * @return $this
    */
    public function setAuthorizerId($authorizerId)
    {
        $this->container['authorizerId'] = $authorizerId;
        return $this;
    }

    /**
    * Gets id
    *  编号
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
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets registerTime
    *  注册时间
    *
    * @return \DateTime|null
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param \DateTime|null $registerTime 注册时间
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets status
    *  后端状态   - 1： 有效
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 后端状态   - 1： 有效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

