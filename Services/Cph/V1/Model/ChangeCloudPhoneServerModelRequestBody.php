<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeCloudPhoneServerModelRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeCloudPhoneServerModelRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    * serverModelName  目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    * phoneModelName  目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'serverModelName' => 'string',
            'phoneModelName' => 'string',
            'extendParam' => '\HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerModelRequestBodyExtendParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    * serverModelName  目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    * phoneModelName  目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'serverModelName' => null,
        'phoneModelName' => null,
        'extendParam' => null
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
    * serverId  云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    * serverModelName  目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    * phoneModelName  目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'serverModelName' => 'server_model_name',
            'phoneModelName' => 'phone_model_name',
            'extendParam' => 'extend_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    * serverModelName  目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    * phoneModelName  目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'serverModelName' => 'setServerModelName',
            'phoneModelName' => 'setPhoneModelName',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    * serverModelName  目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    * phoneModelName  目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'serverModelName' => 'getServerModelName',
            'phoneModelName' => 'getPhoneModelName',
            'extendParam' => 'getExtendParam'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['phoneModelName'] = isset($data['phoneModelName']) ? $data['phoneModelName'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
            if ((mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['serverModelName'] === null) {
            $invalidProperties[] = "'serverModelName' can't be null";
        }
            if ((mb_strlen($this->container['serverModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['phoneModelName'] === null) {
            $invalidProperties[] = "'phoneModelName' can't be null";
        }
            if ((mb_strlen($this->container['phoneModelName']) > 128)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['phoneModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be bigger than or equal to 0.";
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
    * Gets serverId
    *  云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 云手机服务器的唯一标识。只有特定的服务器才能操作变更规格。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverModelName
    *  目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    *
    * @return string
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string $serverModelName 目标云手机服务器规格，不超过64个字节。仅允许相同代系服务器之间的规格切换。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets phoneModelName
    *  目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    *
    * @return string
    */
    public function getPhoneModelName()
    {
        return $this->container['phoneModelName'];
    }

    /**
    * Sets phoneModelName
    *
    * @param string $phoneModelName 目标云手机规格。要求与变更前云手机规格路数相同，与目标云手机服务器规格匹配。
    *
    * @return $this
    */
    public function setPhoneModelName($phoneModelName)
    {
        $this->container['phoneModelName'] = $phoneModelName;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerModelRequestBodyExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerModelRequestBodyExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

