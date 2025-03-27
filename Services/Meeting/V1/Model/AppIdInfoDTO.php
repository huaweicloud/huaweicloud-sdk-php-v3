<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppIdInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppIdInfoDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  企业应用名称
    * appId  企业应用ID
    * appKey  企业应用appkey
    * description  企业应用描述
    * createTime  企业应用创建时间
    * lastUpdateTime  最近修改时间
    * status  企业应用状态  * 0：正常  * 1：停用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'appId' => 'string',
            'appKey' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'lastUpdateTime' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  企业应用名称
    * appId  企业应用ID
    * appKey  企业应用appkey
    * description  企业应用描述
    * createTime  企业应用创建时间
    * lastUpdateTime  最近修改时间
    * status  企业应用状态  * 0：正常  * 1：停用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'appId' => null,
        'appKey' => null,
        'description' => null,
        'createTime' => null,
        'lastUpdateTime' => null,
        'status' => 'int32'
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
    * appName  企业应用名称
    * appId  企业应用ID
    * appKey  企业应用appkey
    * description  企业应用描述
    * createTime  企业应用创建时间
    * lastUpdateTime  最近修改时间
    * status  企业应用状态  * 0：正常  * 1：停用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'appId' => 'app_id',
            'appKey' => 'app_key',
            'description' => 'description',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  企业应用名称
    * appId  企业应用ID
    * appKey  企业应用appkey
    * description  企业应用描述
    * createTime  企业应用创建时间
    * lastUpdateTime  最近修改时间
    * status  企业应用状态  * 0：正常  * 1：停用
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'appId' => 'setAppId',
            'appKey' => 'setAppKey',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  企业应用名称
    * appId  企业应用ID
    * appKey  企业应用appkey
    * description  企业应用描述
    * createTime  企业应用创建时间
    * lastUpdateTime  最近修改时间
    * status  企业应用状态  * 0：正常  * 1：停用
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'appId' => 'getAppId',
            'appKey' => 'getAppKey',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'status' => 'getStatus'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 64)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^\\w{1,64}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^\\w{1,64}$/.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) < 32)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 1)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
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
    * Gets appName
    *  企业应用名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 企业应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appId
    *  企业应用ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 企业应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appKey
    *  企业应用appkey
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey 企业应用appkey
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets description
    *  企业应用描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 企业应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  企业应用创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 企业应用创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最近修改时间
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 最近修改时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets status
    *  企业应用状态  * 0：正常  * 1：停用
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
    * @param int|null $status 企业应用状态  * 0：正常  * 1：停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

