<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVirtualInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVirtualInterface';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * bandwidth  虚拟接口带宽配置
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    * enableBfd  是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * status  对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'bandwidth' => 'int',
            'remoteEpGroup' => 'string[]',
            'serviceEpGroup' => 'string[]',
            'enableBfd' => 'bool',
            'enableNqa' => 'bool',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * bandwidth  虚拟接口带宽配置
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    * enableBfd  是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * status  对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'bandwidth' => 'int32',
        'remoteEpGroup' => null,
        'serviceEpGroup' => null,
        'enableBfd' => null,
        'enableNqa' => null,
        'status' => null
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
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * bandwidth  虚拟接口带宽配置
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    * enableBfd  是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * status  对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'bandwidth' => 'bandwidth',
            'remoteEpGroup' => 'remote_ep_group',
            'serviceEpGroup' => 'service_ep_group',
            'enableBfd' => 'enable_bfd',
            'enableNqa' => 'enable_nqa',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * bandwidth  虚拟接口带宽配置
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    * enableBfd  是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * status  对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'bandwidth' => 'setBandwidth',
            'remoteEpGroup' => 'setRemoteEpGroup',
            'serviceEpGroup' => 'setServiceEpGroup',
            'enableBfd' => 'setEnableBfd',
            'enableNqa' => 'setEnableNqa',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * bandwidth  虚拟接口带宽配置
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    * enableBfd  是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    * status  对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'bandwidth' => 'getBandwidth',
            'remoteEpGroup' => 'getRemoteEpGroup',
            'serviceEpGroup' => 'getServiceEpGroup',
            'enableBfd' => 'getEnableBfd',
            'enableNqa' => 'getEnableNqa',
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
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_REJECTED = 'REJECTED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['remoteEpGroup'] = isset($data['remoteEpGroup']) ? $data['remoteEpGroup'] : null;
        $this->container['serviceEpGroup'] = isset($data['serviceEpGroup']) ? $data['serviceEpGroup'] : null;
        $this->container['enableBfd'] = isset($data['enableBfd']) ? $data['enableBfd'] : null;
        $this->container['enableNqa'] = isset($data['enableNqa']) ? $data['enableNqa'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  虚拟接口名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 虚拟接口名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  虚拟接口描述信息
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
    * @param string|null $description 虚拟接口描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bandwidth
    *  虚拟接口带宽配置
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 虚拟接口带宽配置
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets remoteEpGroup
    *  远端子网列表，记录租户侧的cidrs
    *
    * @return string[]|null
    */
    public function getRemoteEpGroup()
    {
        return $this->container['remoteEpGroup'];
    }

    /**
    * Sets remoteEpGroup
    *
    * @param string[]|null $remoteEpGroup 远端子网列表，记录租户侧的cidrs
    *
    * @return $this
    */
    public function setRemoteEpGroup($remoteEpGroup)
    {
        $this->container['remoteEpGroup'] = $remoteEpGroup;
        return $this;
    }

    /**
    * Gets serviceEpGroup
    *  用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    *
    * @return string[]|null
    */
    public function getServiceEpGroup()
    {
        return $this->container['serviceEpGroup'];
    }

    /**
    * Sets serviceEpGroup
    *
    * @param string[]|null $serviceEpGroup 用于公网专线,用户访问公网服务地址列表。[（预留字段，暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setServiceEpGroup($serviceEpGroup)
    {
        $this->container['serviceEpGroup'] = $serviceEpGroup;
        return $this;
    }

    /**
    * Gets enableBfd
    *  是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    *
    * @return bool|null
    */
    public function getEnableBfd()
    {
        return $this->container['enableBfd'];
    }

    /**
    * Sets enableBfd
    *
    * @param bool|null $enableBfd 是否使能bfd功能：true或false。[（预留字段，暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setEnableBfd($enableBfd)
    {
        $this->container['enableBfd'] = $enableBfd;
        return $this;
    }

    /**
    * Gets enableNqa
    *  是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    *
    * @return bool|null
    */
    public function getEnableNqa()
    {
        return $this->container['enableNqa'];
    }

    /**
    * Sets enableNqa
    *
    * @param bool|null $enableNqa 是否使能nqa功能：true或false。[（预留字段，暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setEnableNqa($enableNqa)
    {
        $this->container['enableNqa'] = $enableNqa;
        return $this;
    }

    /**
    * Gets status
    *  对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
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
    * @param string|null $status 对其他租户创建的虚拟接口进行确认,可以是ACCEPTED和REJECTED
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

