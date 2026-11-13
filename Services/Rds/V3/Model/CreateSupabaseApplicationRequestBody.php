<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSupabaseApplicationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSupabaseApplicationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Supabase应用名称，4~64个字符。
    * basicConfig  basicConfig
    * version  Supabase版本号，格式 x.y.z。
    * mode  部署模式。当前仅支持Single。
    * flavorRef  规格码，格式 rds.supabase.{...}。
    * availabilityZone  可用区ID。Single模式下为1个可用区。
    * dataVip  指定实例内网IP（可选）。IPv4格式。
    * securityGroupId  指定实例所属安全组（可选）。UUID格式。
    * password  默认用户supabase的密码。
    * storageComponent  storageComponent
    * manageType  实例纳管方式。默认newly_instance。
    * managedInstance  managedInstance
    * existingInstance  existingInstance
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'basicConfig' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseAppBasicConfig',
            'version' => 'string',
            'mode' => 'string',
            'flavorRef' => 'string',
            'availabilityZone' => 'string',
            'dataVip' => 'string',
            'securityGroupId' => 'string',
            'password' => 'string',
            'storageComponent' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseStorageComponentConfig',
            'manageType' => 'string',
            'managedInstance' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseInstanceCreateRequest',
            'existingInstance' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseExistingInstanceRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Supabase应用名称，4~64个字符。
    * basicConfig  basicConfig
    * version  Supabase版本号，格式 x.y.z。
    * mode  部署模式。当前仅支持Single。
    * flavorRef  规格码，格式 rds.supabase.{...}。
    * availabilityZone  可用区ID。Single模式下为1个可用区。
    * dataVip  指定实例内网IP（可选）。IPv4格式。
    * securityGroupId  指定实例所属安全组（可选）。UUID格式。
    * password  默认用户supabase的密码。
    * storageComponent  storageComponent
    * manageType  实例纳管方式。默认newly_instance。
    * managedInstance  managedInstance
    * existingInstance  existingInstance
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'basicConfig' => null,
        'version' => null,
        'mode' => null,
        'flavorRef' => null,
        'availabilityZone' => null,
        'dataVip' => null,
        'securityGroupId' => null,
        'password' => null,
        'storageComponent' => null,
        'manageType' => null,
        'managedInstance' => null,
        'existingInstance' => null
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
    * name  Supabase应用名称，4~64个字符。
    * basicConfig  basicConfig
    * version  Supabase版本号，格式 x.y.z。
    * mode  部署模式。当前仅支持Single。
    * flavorRef  规格码，格式 rds.supabase.{...}。
    * availabilityZone  可用区ID。Single模式下为1个可用区。
    * dataVip  指定实例内网IP（可选）。IPv4格式。
    * securityGroupId  指定实例所属安全组（可选）。UUID格式。
    * password  默认用户supabase的密码。
    * storageComponent  storageComponent
    * manageType  实例纳管方式。默认newly_instance。
    * managedInstance  managedInstance
    * existingInstance  existingInstance
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'basicConfig' => 'basic_config',
            'version' => 'version',
            'mode' => 'mode',
            'flavorRef' => 'flavor_ref',
            'availabilityZone' => 'availability_zone',
            'dataVip' => 'data_vip',
            'securityGroupId' => 'security_group_id',
            'password' => 'password',
            'storageComponent' => 'storage_component',
            'manageType' => 'manage_type',
            'managedInstance' => 'managed_instance',
            'existingInstance' => 'existing_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Supabase应用名称，4~64个字符。
    * basicConfig  basicConfig
    * version  Supabase版本号，格式 x.y.z。
    * mode  部署模式。当前仅支持Single。
    * flavorRef  规格码，格式 rds.supabase.{...}。
    * availabilityZone  可用区ID。Single模式下为1个可用区。
    * dataVip  指定实例内网IP（可选）。IPv4格式。
    * securityGroupId  指定实例所属安全组（可选）。UUID格式。
    * password  默认用户supabase的密码。
    * storageComponent  storageComponent
    * manageType  实例纳管方式。默认newly_instance。
    * managedInstance  managedInstance
    * existingInstance  existingInstance
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'basicConfig' => 'setBasicConfig',
            'version' => 'setVersion',
            'mode' => 'setMode',
            'flavorRef' => 'setFlavorRef',
            'availabilityZone' => 'setAvailabilityZone',
            'dataVip' => 'setDataVip',
            'securityGroupId' => 'setSecurityGroupId',
            'password' => 'setPassword',
            'storageComponent' => 'setStorageComponent',
            'manageType' => 'setManageType',
            'managedInstance' => 'setManagedInstance',
            'existingInstance' => 'setExistingInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Supabase应用名称，4~64个字符。
    * basicConfig  basicConfig
    * version  Supabase版本号，格式 x.y.z。
    * mode  部署模式。当前仅支持Single。
    * flavorRef  规格码，格式 rds.supabase.{...}。
    * availabilityZone  可用区ID。Single模式下为1个可用区。
    * dataVip  指定实例内网IP（可选）。IPv4格式。
    * securityGroupId  指定实例所属安全组（可选）。UUID格式。
    * password  默认用户supabase的密码。
    * storageComponent  storageComponent
    * manageType  实例纳管方式。默认newly_instance。
    * managedInstance  managedInstance
    * existingInstance  existingInstance
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'basicConfig' => 'getBasicConfig',
            'version' => 'getVersion',
            'mode' => 'getMode',
            'flavorRef' => 'getFlavorRef',
            'availabilityZone' => 'getAvailabilityZone',
            'dataVip' => 'getDataVip',
            'securityGroupId' => 'getSecurityGroupId',
            'password' => 'getPassword',
            'storageComponent' => 'getStorageComponent',
            'manageType' => 'getManageType',
            'managedInstance' => 'getManagedInstance',
            'existingInstance' => 'getExistingInstance'
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
    const MODE_SINGLE = 'Single';
    const MANAGE_TYPE_NEWLY_INSTANCE = 'newly_instance';
    const MANAGE_TYPE_EXISTED_INSTANCE = 'existed_instance';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_SINGLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getManageTypeAllowableValues()
    {
        return [
            self::MANAGE_TYPE_NEWLY_INSTANCE,
            self::MANAGE_TYPE_EXISTED_INSTANCE,
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
        $this->container['basicConfig'] = isset($data['basicConfig']) ? $data['basicConfig'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['storageComponent'] = isset($data['storageComponent']) ? $data['storageComponent'] : null;
        $this->container['manageType'] = isset($data['manageType']) ? $data['manageType'] : null;
        $this->container['managedInstance'] = isset($data['managedInstance']) ? $data['managedInstance'] : null;
        $this->container['existingInstance'] = isset($data['existingInstance']) ? $data['existingInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['basicConfig'] === null) {
            $invalidProperties[] = "'basicConfig' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if (!preg_match("/^[1-9]\\d*\\.(0|[1-9]\\d*)\\.(0|[1-9]\\d*)$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^[1-9]\\d*\\.(0|[1-9]\\d*)\\.(0|[1-9]\\d*)$/.";
            }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
            if (!preg_match("/^rds.supabase(.[a-z0-9]+){3,4}$/", $this->container['flavorRef'])) {
                $invalidProperties[] = "invalid value for 'flavorRef', must be conform to the pattern /^rds.supabase(.[a-z0-9]+){3,4}$/.";
            }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['storageComponent'] === null) {
            $invalidProperties[] = "'storageComponent' can't be null";
        }
            $allowedValues = $this->getManageTypeAllowableValues();
                if (!is_null($this->container['manageType']) && !in_array($this->container['manageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'manageType', must be one of '%s'",
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
    *  Supabase应用名称，4~64个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name Supabase应用名称，4~64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets basicConfig
    *  basicConfig
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseAppBasicConfig
    */
    public function getBasicConfig()
    {
        return $this->container['basicConfig'];
    }

    /**
    * Sets basicConfig
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseAppBasicConfig $basicConfig basicConfig
    *
    * @return $this
    */
    public function setBasicConfig($basicConfig)
    {
        $this->container['basicConfig'] = $basicConfig;
        return $this;
    }

    /**
    * Gets version
    *  Supabase版本号，格式 x.y.z。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version Supabase版本号，格式 x.y.z。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets mode
    *  部署模式。当前仅支持Single。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 部署模式。当前仅支持Single。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码，格式 rds.supabase.{...}。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 规格码，格式 rds.supabase.{...}。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区ID。Single模式下为1个可用区。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区ID。Single模式下为1个可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets dataVip
    *  指定实例内网IP（可选）。IPv4格式。
    *
    * @return string|null
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string|null $dataVip 指定实例内网IP（可选）。IPv4格式。
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  指定实例所属安全组（可选）。UUID格式。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 指定实例所属安全组（可选）。UUID格式。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets password
    *  默认用户supabase的密码。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 默认用户supabase的密码。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets storageComponent
    *  storageComponent
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseStorageComponentConfig
    */
    public function getStorageComponent()
    {
        return $this->container['storageComponent'];
    }

    /**
    * Sets storageComponent
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseStorageComponentConfig $storageComponent storageComponent
    *
    * @return $this
    */
    public function setStorageComponent($storageComponent)
    {
        $this->container['storageComponent'] = $storageComponent;
        return $this;
    }

    /**
    * Gets manageType
    *  实例纳管方式。默认newly_instance。
    *
    * @return string|null
    */
    public function getManageType()
    {
        return $this->container['manageType'];
    }

    /**
    * Sets manageType
    *
    * @param string|null $manageType 实例纳管方式。默认newly_instance。
    *
    * @return $this
    */
    public function setManageType($manageType)
    {
        $this->container['manageType'] = $manageType;
        return $this;
    }

    /**
    * Gets managedInstance
    *  managedInstance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseInstanceCreateRequest|null
    */
    public function getManagedInstance()
    {
        return $this->container['managedInstance'];
    }

    /**
    * Sets managedInstance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseInstanceCreateRequest|null $managedInstance managedInstance
    *
    * @return $this
    */
    public function setManagedInstance($managedInstance)
    {
        $this->container['managedInstance'] = $managedInstance;
        return $this;
    }

    /**
    * Gets existingInstance
    *  existingInstance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseExistingInstanceRequest|null
    */
    public function getExistingInstance()
    {
        return $this->container['existingInstance'];
    }

    /**
    * Sets existingInstance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseExistingInstanceRequest|null $existingInstance existingInstance
    *
    * @return $this
    */
    public function setExistingInstance($existingInstance)
    {
        $this->container['existingInstance'] = $existingInstance;
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

