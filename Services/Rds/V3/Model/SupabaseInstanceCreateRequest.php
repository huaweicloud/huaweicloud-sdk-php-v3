<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseInstanceCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseInstanceCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastore  datastore
    * chargeInfo  chargeInfo
    * flavorRef  PG实例规格码。
    * volume  volume
    * availabilityZone  可用区，≤2个逗号分隔，首个=顶层主AZ。
    * ha  ha
    * configurationId  参数模板ID（可选）。
    * port  数据库端口，2100~9500，默认5432。
    * securityGroupId  安全组ID。
    * password  数据库密码。
    * dataVip  内网IP（可选）。
    * enterpriseProjectId  企业项目ID。
    * tags  标签列表，最多20个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastore' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseDatastore',
            'chargeInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ChargeInfo',
            'flavorRef' => 'string',
            'volume' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseVolumeConfig',
            'availabilityZone' => 'string',
            'ha' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseHaConfig',
            'configurationId' => 'string',
            'port' => 'int',
            'securityGroupId' => 'string',
            'password' => 'string',
            'dataVip' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Rds\V3\Model\TagWithKeyValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastore  datastore
    * chargeInfo  chargeInfo
    * flavorRef  PG实例规格码。
    * volume  volume
    * availabilityZone  可用区，≤2个逗号分隔，首个=顶层主AZ。
    * ha  ha
    * configurationId  参数模板ID（可选）。
    * port  数据库端口，2100~9500，默认5432。
    * securityGroupId  安全组ID。
    * password  数据库密码。
    * dataVip  内网IP（可选）。
    * enterpriseProjectId  企业项目ID。
    * tags  标签列表，最多20个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastore' => null,
        'chargeInfo' => null,
        'flavorRef' => null,
        'volume' => null,
        'availabilityZone' => null,
        'ha' => null,
        'configurationId' => null,
        'port' => null,
        'securityGroupId' => null,
        'password' => null,
        'dataVip' => null,
        'enterpriseProjectId' => null,
        'tags' => null
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
    * datastore  datastore
    * chargeInfo  chargeInfo
    * flavorRef  PG实例规格码。
    * volume  volume
    * availabilityZone  可用区，≤2个逗号分隔，首个=顶层主AZ。
    * ha  ha
    * configurationId  参数模板ID（可选）。
    * port  数据库端口，2100~9500，默认5432。
    * securityGroupId  安全组ID。
    * password  数据库密码。
    * dataVip  内网IP（可选）。
    * enterpriseProjectId  企业项目ID。
    * tags  标签列表，最多20个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastore' => 'datastore',
            'chargeInfo' => 'charge_info',
            'flavorRef' => 'flavor_ref',
            'volume' => 'volume',
            'availabilityZone' => 'availability_zone',
            'ha' => 'ha',
            'configurationId' => 'configuration_id',
            'port' => 'port',
            'securityGroupId' => 'security_group_id',
            'password' => 'password',
            'dataVip' => 'data_vip',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastore  datastore
    * chargeInfo  chargeInfo
    * flavorRef  PG实例规格码。
    * volume  volume
    * availabilityZone  可用区，≤2个逗号分隔，首个=顶层主AZ。
    * ha  ha
    * configurationId  参数模板ID（可选）。
    * port  数据库端口，2100~9500，默认5432。
    * securityGroupId  安全组ID。
    * password  数据库密码。
    * dataVip  内网IP（可选）。
    * enterpriseProjectId  企业项目ID。
    * tags  标签列表，最多20个。
    *
    * @var string[]
    */
    protected static $setters = [
            'datastore' => 'setDatastore',
            'chargeInfo' => 'setChargeInfo',
            'flavorRef' => 'setFlavorRef',
            'volume' => 'setVolume',
            'availabilityZone' => 'setAvailabilityZone',
            'ha' => 'setHa',
            'configurationId' => 'setConfigurationId',
            'port' => 'setPort',
            'securityGroupId' => 'setSecurityGroupId',
            'password' => 'setPassword',
            'dataVip' => 'setDataVip',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastore  datastore
    * chargeInfo  chargeInfo
    * flavorRef  PG实例规格码。
    * volume  volume
    * availabilityZone  可用区，≤2个逗号分隔，首个=顶层主AZ。
    * ha  ha
    * configurationId  参数模板ID（可选）。
    * port  数据库端口，2100~9500，默认5432。
    * securityGroupId  安全组ID。
    * password  数据库密码。
    * dataVip  内网IP（可选）。
    * enterpriseProjectId  企业项目ID。
    * tags  标签列表，最多20个。
    *
    * @var string[]
    */
    protected static $getters = [
            'datastore' => 'getDatastore',
            'chargeInfo' => 'getChargeInfo',
            'flavorRef' => 'getFlavorRef',
            'volume' => 'getVolume',
            'availabilityZone' => 'getAvailabilityZone',
            'ha' => 'getHa',
            'configurationId' => 'getConfigurationId',
            'port' => 'getPort',
            'securityGroupId' => 'getSecurityGroupId',
            'password' => 'getPassword',
            'dataVip' => 'getDataVip',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags'
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
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['chargeInfo'] === null) {
            $invalidProperties[] = "'chargeInfo' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['ha'] === null) {
            $invalidProperties[] = "'ha' can't be null";
        }
            if (!is_null($this->container['port']) && ($this->container['port'] > 9500)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 9500.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 2100)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 2100.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
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
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseDatastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseDatastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ChargeInfo
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ChargeInfo $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets flavorRef
    *  PG实例规格码。
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
    * @param string $flavorRef PG实例规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseVolumeConfig
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseVolumeConfig $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区，≤2个逗号分隔，首个=顶层主AZ。
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
    * @param string $availabilityZone 可用区，≤2个逗号分隔，首个=顶层主AZ。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets ha
    *  ha
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseHaConfig
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseHaConfig $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets configurationId
    *  参数模板ID（可选）。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 参数模板ID（可选）。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口，2100~9500，默认5432。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 数据库端口，2100~9500，默认5432。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组ID。
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
    *  数据库密码。
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
    * @param string $password 数据库密码。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets dataVip
    *  内网IP（可选）。
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
    * @param string|null $dataVip 内网IP（可选）。
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，最多20个。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TagWithKeyValue[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TagWithKeyValue[]|null $tags 标签列表，最多20个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

