<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StarRocksCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StarRocksCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
    * engine  engine
    * ha  ha
    * feFlavorId  FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * beFlavorId  BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * dbRootPwd  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * feCount  FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * beCount  BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * azMode  可用区类型。 当前仅支持single。
    * feVolume  feVolume
    * beVolume  beVolume
    * azCode  可用区代码。
    * timeZone  时区。默认时区为UTC+08:00。
    * tagsInfo  tagsInfo
    * securityGroupId  实例安全组ID。默认与Taurus安全组ID一致。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'engine' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestEngine',
            'ha' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestHa',
            'feFlavorId' => 'string',
            'beFlavorId' => 'string',
            'dbRootPwd' => 'string',
            'feCount' => 'int',
            'beCount' => 'int',
            'azMode' => 'string',
            'feVolume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestFeVolume',
            'beVolume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestBeVolume',
            'azCode' => 'string',
            'timeZone' => 'string',
            'tagsInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestTagsInfo',
            'securityGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
    * engine  engine
    * ha  ha
    * feFlavorId  FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * beFlavorId  BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * dbRootPwd  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * feCount  FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * beCount  BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * azMode  可用区类型。 当前仅支持single。
    * feVolume  feVolume
    * beVolume  beVolume
    * azCode  可用区代码。
    * timeZone  时区。默认时区为UTC+08:00。
    * tagsInfo  tagsInfo
    * securityGroupId  实例安全组ID。默认与Taurus安全组ID一致。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'engine' => null,
        'ha' => null,
        'feFlavorId' => null,
        'beFlavorId' => null,
        'dbRootPwd' => null,
        'feCount' => 'int32',
        'beCount' => 'int32',
        'azMode' => null,
        'feVolume' => null,
        'beVolume' => null,
        'azCode' => null,
        'timeZone' => null,
        'tagsInfo' => null,
        'securityGroupId' => null
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
    * name  实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
    * engine  engine
    * ha  ha
    * feFlavorId  FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * beFlavorId  BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * dbRootPwd  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * feCount  FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * beCount  BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * azMode  可用区类型。 当前仅支持single。
    * feVolume  feVolume
    * beVolume  beVolume
    * azCode  可用区代码。
    * timeZone  时区。默认时区为UTC+08:00。
    * tagsInfo  tagsInfo
    * securityGroupId  实例安全组ID。默认与Taurus安全组ID一致。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'engine' => 'engine',
            'ha' => 'ha',
            'feFlavorId' => 'fe_flavor_id',
            'beFlavorId' => 'be_flavor_id',
            'dbRootPwd' => 'db_root_pwd',
            'feCount' => 'fe_count',
            'beCount' => 'be_count',
            'azMode' => 'az_mode',
            'feVolume' => 'fe_volume',
            'beVolume' => 'be_volume',
            'azCode' => 'az_code',
            'timeZone' => 'time_zone',
            'tagsInfo' => 'tags_info',
            'securityGroupId' => 'security_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
    * engine  engine
    * ha  ha
    * feFlavorId  FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * beFlavorId  BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * dbRootPwd  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * feCount  FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * beCount  BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * azMode  可用区类型。 当前仅支持single。
    * feVolume  feVolume
    * beVolume  beVolume
    * azCode  可用区代码。
    * timeZone  时区。默认时区为UTC+08:00。
    * tagsInfo  tagsInfo
    * securityGroupId  实例安全组ID。默认与Taurus安全组ID一致。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'engine' => 'setEngine',
            'ha' => 'setHa',
            'feFlavorId' => 'setFeFlavorId',
            'beFlavorId' => 'setBeFlavorId',
            'dbRootPwd' => 'setDbRootPwd',
            'feCount' => 'setFeCount',
            'beCount' => 'setBeCount',
            'azMode' => 'setAzMode',
            'feVolume' => 'setFeVolume',
            'beVolume' => 'setBeVolume',
            'azCode' => 'setAzCode',
            'timeZone' => 'setTimeZone',
            'tagsInfo' => 'setTagsInfo',
            'securityGroupId' => 'setSecurityGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
    * engine  engine
    * ha  ha
    * feFlavorId  FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * beFlavorId  BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    * dbRootPwd  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * feCount  FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * beCount  BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    * azMode  可用区类型。 当前仅支持single。
    * feVolume  feVolume
    * beVolume  beVolume
    * azCode  可用区代码。
    * timeZone  时区。默认时区为UTC+08:00。
    * tagsInfo  tagsInfo
    * securityGroupId  实例安全组ID。默认与Taurus安全组ID一致。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'engine' => 'getEngine',
            'ha' => 'getHa',
            'feFlavorId' => 'getFeFlavorId',
            'beFlavorId' => 'getBeFlavorId',
            'dbRootPwd' => 'getDbRootPwd',
            'feCount' => 'getFeCount',
            'beCount' => 'getBeCount',
            'azMode' => 'getAzMode',
            'feVolume' => 'getFeVolume',
            'beVolume' => 'getBeVolume',
            'azCode' => 'getAzCode',
            'timeZone' => 'getTimeZone',
            'tagsInfo' => 'getTagsInfo',
            'securityGroupId' => 'getSecurityGroupId'
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
    const AZ_MODE_SINGLE = 'single';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAzModeAllowableValues()
    {
        return [
            self::AZ_MODE_SINGLE,
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['feFlavorId'] = isset($data['feFlavorId']) ? $data['feFlavorId'] : null;
        $this->container['beFlavorId'] = isset($data['beFlavorId']) ? $data['beFlavorId'] : null;
        $this->container['dbRootPwd'] = isset($data['dbRootPwd']) ? $data['dbRootPwd'] : null;
        $this->container['feCount'] = isset($data['feCount']) ? $data['feCount'] : null;
        $this->container['beCount'] = isset($data['beCount']) ? $data['beCount'] : null;
        $this->container['azMode'] = isset($data['azMode']) ? $data['azMode'] : null;
        $this->container['feVolume'] = isset($data['feVolume']) ? $data['feVolume'] : null;
        $this->container['beVolume'] = isset($data['beVolume']) ? $data['beVolume'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['tagsInfo'] = isset($data['tagsInfo']) ? $data['tagsInfo'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
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
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['ha'] === null) {
            $invalidProperties[] = "'ha' can't be null";
        }
        if ($this->container['feFlavorId'] === null) {
            $invalidProperties[] = "'feFlavorId' can't be null";
        }
        if ($this->container['beFlavorId'] === null) {
            $invalidProperties[] = "'beFlavorId' can't be null";
        }
        if ($this->container['dbRootPwd'] === null) {
            $invalidProperties[] = "'dbRootPwd' can't be null";
        }
            if (!preg_match("/^[a-zA-Z\\d~!@,$#%\\^\\-\\*_=\\+\\?\\|\\.]{8,32}$/", $this->container['dbRootPwd'])) {
                $invalidProperties[] = "invalid value for 'dbRootPwd', must be conform to the pattern /^[a-zA-Z\\d~!@,$#%\\^\\-\\*_=\\+\\?\\|\\.]{8,32}$/.";
            }
        if ($this->container['feCount'] === null) {
            $invalidProperties[] = "'feCount' can't be null";
        }
        if ($this->container['beCount'] === null) {
            $invalidProperties[] = "'beCount' can't be null";
        }
        if ($this->container['azMode'] === null) {
            $invalidProperties[] = "'azMode' can't be null";
        }
            $allowedValues = $this->getAzModeAllowableValues();
                if (!is_null($this->container['azMode']) && !in_array($this->container['azMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'azMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['feVolume'] === null) {
            $invalidProperties[] = "'feVolume' can't be null";
        }
        if ($this->container['beVolume'] === null) {
            $invalidProperties[] = "'beVolume' can't be null";
        }
        if ($this->container['azCode'] === null) {
            $invalidProperties[] = "'azCode' can't be null";
        }
        if ($this->container['tagsInfo'] === null) {
            $invalidProperties[] = "'tagsInfo' can't be null";
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
    *  实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
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
    * @param string $name 实例名称。同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节，必须以字母开头，区分大小写，可以包含字母、数字、中划线、下划线，不能包含其他特殊字符。不支持中文名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engine
    *  engine
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestEngine
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestEngine $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets ha
    *  ha
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestHa
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestHa $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets feFlavorId
    *  FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    *
    * @return string
    */
    public function getFeFlavorId()
    {
        return $this->container['feFlavorId'];
    }

    /**
    * Sets feFlavorId
    *
    * @param string $feFlavorId FE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    *
    * @return $this
    */
    public function setFeFlavorId($feFlavorId)
    {
        $this->container['feFlavorId'] = $feFlavorId;
        return $this;
    }

    /**
    * Gets beFlavorId
    *  BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    *
    * @return string
    */
    public function getBeFlavorId()
    {
        return $this->container['beFlavorId'];
    }

    /**
    * Sets beFlavorId
    *
    * @param string $beFlavorId BE节点规格ID。使用可通过查询HTAP规格响应消息中的“id”。
    *
    * @return $this
    */
    public function setBeFlavorId($beFlavorId)
    {
        $this->container['beFlavorId'] = $beFlavorId;
        return $this;
    }

    /**
    * Gets dbRootPwd
    *  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @return string
    */
    public function getDbRootPwd()
    {
        return $this->container['dbRootPwd'];
    }

    /**
    * Sets dbRootPwd
    *
    * @param string $dbRootPwd 数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&|.，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @return $this
    */
    public function setDbRootPwd($dbRootPwd)
    {
        $this->container['dbRootPwd'] = $dbRootPwd;
        return $this;
    }

    /**
    * Gets feCount
    *  FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    *
    * @return int
    */
    public function getFeCount()
    {
        return $this->container['feCount'];
    }

    /**
    * Sets feCount
    *
    * @param int $feCount FE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    *
    * @return $this
    */
    public function setFeCount($feCount)
    {
        $this->container['feCount'] = $feCount;
        return $this;
    }

    /**
    * Gets beCount
    *  BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    *
    * @return int
    */
    public function getBeCount()
    {
        return $this->container['beCount'];
    }

    /**
    * Sets beCount
    *
    * @param int $beCount BE节点数。 - 单机时固定为1 - 集群时取值[3, 10]
    *
    * @return $this
    */
    public function setBeCount($beCount)
    {
        $this->container['beCount'] = $beCount;
        return $this;
    }

    /**
    * Gets azMode
    *  可用区类型。 当前仅支持single。
    *
    * @return string
    */
    public function getAzMode()
    {
        return $this->container['azMode'];
    }

    /**
    * Sets azMode
    *
    * @param string $azMode 可用区类型。 当前仅支持single。
    *
    * @return $this
    */
    public function setAzMode($azMode)
    {
        $this->container['azMode'] = $azMode;
        return $this;
    }

    /**
    * Gets feVolume
    *  feVolume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestFeVolume
    */
    public function getFeVolume()
    {
        return $this->container['feVolume'];
    }

    /**
    * Sets feVolume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestFeVolume $feVolume feVolume
    *
    * @return $this
    */
    public function setFeVolume($feVolume)
    {
        $this->container['feVolume'] = $feVolume;
        return $this;
    }

    /**
    * Gets beVolume
    *  beVolume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestBeVolume
    */
    public function getBeVolume()
    {
        return $this->container['beVolume'];
    }

    /**
    * Sets beVolume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestBeVolume $beVolume beVolume
    *
    * @return $this
    */
    public function setBeVolume($beVolume)
    {
        $this->container['beVolume'] = $beVolume;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区代码。
    *
    * @return string
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string $azCode 可用区代码。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。默认时区为UTC+08:00。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区。默认时区为UTC+08:00。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets tagsInfo
    *  tagsInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestTagsInfo
    */
    public function getTagsInfo()
    {
        return $this->container['tagsInfo'];
    }

    /**
    * Sets tagsInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksCreateRequestTagsInfo $tagsInfo tagsInfo
    *
    * @return $this
    */
    public function setTagsInfo($tagsInfo)
    {
        $this->container['tagsInfo'] = $tagsInfo;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  实例安全组ID。默认与Taurus安全组ID一致。
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
    * @param string|null $securityGroupId 实例安全组ID。默认与Taurus安全组ID一致。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
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

