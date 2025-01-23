<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateChInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateChInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
    * engine  engine
    * ha  ha
    * flavorId  节点规格ID，可通过“HTAP查询规格信息”获取。
    * dbRootPwd  root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
    * azMode  可用区类型。 取值范围： - single：单可用区 - double：多可用区
    * volume  volume
    * azCode  可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
    * timeZone  时区。默认为所属TaurusDB实例时区。
    * tagsInfo  tagsInfo
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'engine' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseEngineInfo',
            'ha' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyHa',
            'flavorId' => 'string',
            'dbRootPwd' => 'string',
            'azMode' => 'string',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyVolume',
            'azCode' => 'string',
            'timeZone' => 'string',
            'tagsInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyTagsInfo',
            'payInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyPayInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
    * engine  engine
    * ha  ha
    * flavorId  节点规格ID，可通过“HTAP查询规格信息”获取。
    * dbRootPwd  root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
    * azMode  可用区类型。 取值范围： - single：单可用区 - double：多可用区
    * volume  volume
    * azCode  可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
    * timeZone  时区。默认为所属TaurusDB实例时区。
    * tagsInfo  tagsInfo
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'engine' => null,
        'ha' => null,
        'flavorId' => null,
        'dbRootPwd' => null,
        'azMode' => null,
        'volume' => null,
        'azCode' => null,
        'timeZone' => null,
        'tagsInfo' => null,
        'payInfo' => null
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
    * name  ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
    * engine  engine
    * ha  ha
    * flavorId  节点规格ID，可通过“HTAP查询规格信息”获取。
    * dbRootPwd  root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
    * azMode  可用区类型。 取值范围： - single：单可用区 - double：多可用区
    * volume  volume
    * azCode  可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
    * timeZone  时区。默认为所属TaurusDB实例时区。
    * tagsInfo  tagsInfo
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'engine' => 'engine',
            'ha' => 'ha',
            'flavorId' => 'flavor_id',
            'dbRootPwd' => 'db_root_pwd',
            'azMode' => 'az_mode',
            'volume' => 'volume',
            'azCode' => 'az_code',
            'timeZone' => 'time_zone',
            'tagsInfo' => 'tags_info',
            'payInfo' => 'pay_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
    * engine  engine
    * ha  ha
    * flavorId  节点规格ID，可通过“HTAP查询规格信息”获取。
    * dbRootPwd  root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
    * azMode  可用区类型。 取值范围： - single：单可用区 - double：多可用区
    * volume  volume
    * azCode  可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
    * timeZone  时区。默认为所属TaurusDB实例时区。
    * tagsInfo  tagsInfo
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'engine' => 'setEngine',
            'ha' => 'setHa',
            'flavorId' => 'setFlavorId',
            'dbRootPwd' => 'setDbRootPwd',
            'azMode' => 'setAzMode',
            'volume' => 'setVolume',
            'azCode' => 'setAzCode',
            'timeZone' => 'setTimeZone',
            'tagsInfo' => 'setTagsInfo',
            'payInfo' => 'setPayInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
    * engine  engine
    * ha  ha
    * flavorId  节点规格ID，可通过“HTAP查询规格信息”获取。
    * dbRootPwd  root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
    * azMode  可用区类型。 取值范围： - single：单可用区 - double：多可用区
    * volume  volume
    * azCode  可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
    * timeZone  时区。默认为所属TaurusDB实例时区。
    * tagsInfo  tagsInfo
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'engine' => 'getEngine',
            'ha' => 'getHa',
            'flavorId' => 'getFlavorId',
            'dbRootPwd' => 'getDbRootPwd',
            'azMode' => 'getAzMode',
            'volume' => 'getVolume',
            'azCode' => 'getAzCode',
            'timeZone' => 'getTimeZone',
            'tagsInfo' => 'getTagsInfo',
            'payInfo' => 'getPayInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['dbRootPwd'] = isset($data['dbRootPwd']) ? $data['dbRootPwd'] : null;
        $this->container['azMode'] = isset($data['azMode']) ? $data['azMode'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['tagsInfo'] = isset($data['tagsInfo']) ? $data['tagsInfo'] : null;
        $this->container['payInfo'] = isset($data['payInfo']) ? $data['payInfo'] : null;
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
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['dbRootPwd'] === null) {
            $invalidProperties[] = "'dbRootPwd' can't be null";
        }
        if ($this->container['azMode'] === null) {
            $invalidProperties[] = "'azMode' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
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
    *  ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
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
    * @param string $name ClickHouse实例名称。 - 4位到64位之间 - 必须以字母开头，可以包含字母、数字、中划线或下划线 - 不能包含其他特殊字符
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseEngineInfo
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseEngineInfo $engine engine
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyHa
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyHa $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets flavorId
    *  节点规格ID，可通过“HTAP查询规格信息”获取。
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId 节点规格ID，可通过“HTAP查询规格信息”获取。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets dbRootPwd
    *  root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
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
    * @param string $dbRootPwd root账户密码。 - 8~32个字符 - 包含大写字母、小写字母、数字或特殊字符(~ ! @ # % ^ * - _ = + ? ,)中的三种
    *
    * @return $this
    */
    public function setDbRootPwd($dbRootPwd)
    {
        $this->container['dbRootPwd'] = $dbRootPwd;
        return $this;
    }

    /**
    * Gets azMode
    *  可用区类型。 取值范围： - single：单可用区 - double：多可用区
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
    * @param string $azMode 可用区类型。 取值范围： - single：单可用区 - double：多可用区
    *
    * @return $this
    */
    public function setAzMode($azMode)
    {
        $this->container['azMode'] = $azMode;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyVolume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyVolume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
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
    * @param string $azCode 可用区码。  当ha中mode为Ha时，需要填写多个可用区，用\",\" 分隔。例如：cn-southwest-244b,cn-southwest-244a
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
    *  时区。默认为所属TaurusDB实例时区。
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
    * @param string|null $timeZone 时区。默认为所属TaurusDB实例时区。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyTagsInfo
    */
    public function getTagsInfo()
    {
        return $this->container['tagsInfo'];
    }

    /**
    * Sets tagsInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyTagsInfo $tagsInfo tagsInfo
    *
    * @return $this
    */
    public function setTagsInfo($tagsInfo)
    {
        $this->container['tagsInfo'] = $tagsInfo;
        return $this;
    }

    /**
    * Gets payInfo
    *  payInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyPayInfo|null
    */
    public function getPayInfo()
    {
        return $this->container['payInfo'];
    }

    /**
    * Sets payInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceRequestBodyPayInfo|null $payInfo payInfo
    *
    * @return $this
    */
    public function setPayInfo($payInfo)
    {
        $this->container['payInfo'] = $payInfo;
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

