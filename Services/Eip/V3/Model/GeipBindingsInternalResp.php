<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeipBindingsInternalResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeipBindingsInternalResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * bindingInstanceType  绑定实例的类型
    * bindingInstanceId  绑定实例的id
    * gcbandwidth  骨干带宽对象
    * vnic  实例port的信息
    * vnList  GEIP实例的vn信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'geipId' => 'string',
            'geipIpAddress' => 'string',
            'publicBorderGroup' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'bindingInstanceType' => 'string',
            'bindingInstanceId' => 'string',
            'gcbandwidth' => 'object',
            'vnic' => 'object',
            'vnList' => '\HuaweiCloud\SDK\Eip\V3\Model\InstancevirtualListResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * bindingInstanceType  绑定实例的类型
    * bindingInstanceId  绑定实例的id
    * gcbandwidth  骨干带宽对象
    * vnic  实例port的信息
    * vnList  GEIP实例的vn信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'geipId' => null,
        'geipIpAddress' => null,
        'publicBorderGroup' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'bindingInstanceType' => null,
        'bindingInstanceId' => null,
        'gcbandwidth' => null,
        'vnic' => null,
        'vnList' => null
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
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * bindingInstanceType  绑定实例的类型
    * bindingInstanceId  绑定实例的id
    * gcbandwidth  骨干带宽对象
    * vnic  实例port的信息
    * vnList  GEIP实例的vn信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'geipId' => 'geip_id',
            'geipIpAddress' => 'geip_ip_address',
            'publicBorderGroup' => 'public_border_group',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'bindingInstanceType' => 'binding_instance_type',
            'bindingInstanceId' => 'binding_instance_id',
            'gcbandwidth' => 'gcbandwidth',
            'vnic' => 'vnic',
            'vnList' => 'vn_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * bindingInstanceType  绑定实例的类型
    * bindingInstanceId  绑定实例的id
    * gcbandwidth  骨干带宽对象
    * vnic  实例port的信息
    * vnList  GEIP实例的vn信息
    *
    * @var string[]
    */
    protected static $setters = [
            'geipId' => 'setGeipId',
            'geipIpAddress' => 'setGeipIpAddress',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'bindingInstanceType' => 'setBindingInstanceType',
            'bindingInstanceId' => 'setBindingInstanceId',
            'gcbandwidth' => 'setGcbandwidth',
            'vnic' => 'setVnic',
            'vnList' => 'setVnList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * bindingInstanceType  绑定实例的类型
    * bindingInstanceId  绑定实例的id
    * gcbandwidth  骨干带宽对象
    * vnic  实例port的信息
    * vnList  GEIP实例的vn信息
    *
    * @var string[]
    */
    protected static $getters = [
            'geipId' => 'getGeipId',
            'geipIpAddress' => 'getGeipIpAddress',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'bindingInstanceType' => 'getBindingInstanceType',
            'bindingInstanceId' => 'getBindingInstanceId',
            'gcbandwidth' => 'getGcbandwidth',
            'vnic' => 'getVnic',
            'vnList' => 'getVnList'
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
        $this->container['geipId'] = isset($data['geipId']) ? $data['geipId'] : null;
        $this->container['geipIpAddress'] = isset($data['geipIpAddress']) ? $data['geipIpAddress'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['bindingInstanceType'] = isset($data['bindingInstanceType']) ? $data['bindingInstanceType'] : null;
        $this->container['bindingInstanceId'] = isset($data['bindingInstanceId']) ? $data['bindingInstanceId'] : null;
        $this->container['gcbandwidth'] = isset($data['gcbandwidth']) ? $data['gcbandwidth'] : null;
        $this->container['vnic'] = isset($data['vnic']) ? $data['vnic'] : null;
        $this->container['vnList'] = isset($data['vnList']) ? $data['vnList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['geipId']) && (mb_strlen($this->container['geipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'geipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['geipId']) && (mb_strlen($this->container['geipId']) < 0)) {
                $invalidProperties[] = "invalid value for 'geipId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['geipIpAddress']) && (mb_strlen($this->container['geipIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'geipIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['geipIpAddress']) && (mb_strlen($this->container['geipIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'geipIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bindingInstanceType']) && (mb_strlen($this->container['bindingInstanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'bindingInstanceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bindingInstanceType']) && (mb_strlen($this->container['bindingInstanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bindingInstanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bindingInstanceId']) && (mb_strlen($this->container['bindingInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bindingInstanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bindingInstanceId']) && (mb_strlen($this->container['bindingInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bindingInstanceId', the character length must be bigger than or equal to 0.";
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
    * Gets geipId
    *  GEIP的uuid
    *
    * @return string|null
    */
    public function getGeipId()
    {
        return $this->container['geipId'];
    }

    /**
    * Sets geipId
    *
    * @param string|null $geipId GEIP的uuid
    *
    * @return $this
    */
    public function setGeipId($geipId)
    {
        $this->container['geipId'] = $geipId;
        return $this;
    }

    /**
    * Gets geipIpAddress
    *  GEIP的ip地址
    *
    * @return string|null
    */
    public function getGeipIpAddress()
    {
        return $this->container['geipIpAddress'];
    }

    /**
    * Sets geipIpAddress
    *
    * @param string|null $geipIpAddress GEIP的ip地址
    *
    * @return $this
    */
    public function setGeipIpAddress($geipIpAddress)
    {
        $this->container['geipIpAddress'] = $geipIpAddress;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  中心站点or边缘站点，默认展示
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 中心站点or边缘站点，默认展示
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets bindingInstanceType
    *  绑定实例的类型
    *
    * @return string|null
    */
    public function getBindingInstanceType()
    {
        return $this->container['bindingInstanceType'];
    }

    /**
    * Sets bindingInstanceType
    *
    * @param string|null $bindingInstanceType 绑定实例的类型
    *
    * @return $this
    */
    public function setBindingInstanceType($bindingInstanceType)
    {
        $this->container['bindingInstanceType'] = $bindingInstanceType;
        return $this;
    }

    /**
    * Gets bindingInstanceId
    *  绑定实例的id
    *
    * @return string|null
    */
    public function getBindingInstanceId()
    {
        return $this->container['bindingInstanceId'];
    }

    /**
    * Sets bindingInstanceId
    *
    * @param string|null $bindingInstanceId 绑定实例的id
    *
    * @return $this
    */
    public function setBindingInstanceId($bindingInstanceId)
    {
        $this->container['bindingInstanceId'] = $bindingInstanceId;
        return $this;
    }

    /**
    * Gets gcbandwidth
    *  骨干带宽对象
    *
    * @return object|null
    */
    public function getGcbandwidth()
    {
        return $this->container['gcbandwidth'];
    }

    /**
    * Sets gcbandwidth
    *
    * @param object|null $gcbandwidth 骨干带宽对象
    *
    * @return $this
    */
    public function setGcbandwidth($gcbandwidth)
    {
        $this->container['gcbandwidth'] = $gcbandwidth;
        return $this;
    }

    /**
    * Gets vnic
    *  实例port的信息
    *
    * @return object|null
    */
    public function getVnic()
    {
        return $this->container['vnic'];
    }

    /**
    * Sets vnic
    *
    * @param object|null $vnic 实例port的信息
    *
    * @return $this
    */
    public function setVnic($vnic)
    {
        $this->container['vnic'] = $vnic;
        return $this;
    }

    /**
    * Gets vnList
    *  GEIP实例的vn信息
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\InstancevirtualListResp[]|null
    */
    public function getVnList()
    {
        return $this->container['vnList'];
    }

    /**
    * Sets vnList
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\InstancevirtualListResp[]|null $vnList GEIP实例的vn信息
    *
    * @return $this
    */
    public function setVnList($vnList)
    {
        $this->container['vnList'] = $vnList;
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

