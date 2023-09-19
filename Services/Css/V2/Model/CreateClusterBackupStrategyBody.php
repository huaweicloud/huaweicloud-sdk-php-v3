<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterBackupStrategyBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterBackupStrategyBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * period  每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    * keepday  自动创建快照的保留天数。取值范围：1-90。
    * bucket  备份使用的OBS桶名称。
    * basePath  快照在OBS桶中的存放路径。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'period' => 'string',
            'prefix' => 'string',
            'keepday' => 'int',
            'bucket' => 'string',
            'basePath' => 'string',
            'agency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * period  每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    * keepday  自动创建快照的保留天数。取值范围：1-90。
    * bucket  备份使用的OBS桶名称。
    * basePath  快照在OBS桶中的存放路径。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'period' => null,
        'prefix' => null,
        'keepday' => 'int32',
        'bucket' => null,
        'basePath' => null,
        'agency' => null
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
    * period  每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    * keepday  自动创建快照的保留天数。取值范围：1-90。
    * bucket  备份使用的OBS桶名称。
    * basePath  快照在OBS桶中的存放路径。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'period' => 'period',
            'prefix' => 'prefix',
            'keepday' => 'keepday',
            'bucket' => 'bucket',
            'basePath' => 'basePath',
            'agency' => 'agency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * period  每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    * keepday  自动创建快照的保留天数。取值范围：1-90。
    * bucket  备份使用的OBS桶名称。
    * basePath  快照在OBS桶中的存放路径。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @var string[]
    */
    protected static $setters = [
            'period' => 'setPeriod',
            'prefix' => 'setPrefix',
            'keepday' => 'setKeepday',
            'bucket' => 'setBucket',
            'basePath' => 'setBasePath',
            'agency' => 'setAgency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * period  每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    * keepday  自动创建快照的保留天数。取值范围：1-90。
    * bucket  备份使用的OBS桶名称。
    * basePath  快照在OBS桶中的存放路径。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @var string[]
    */
    protected static $getters = [
            'period' => 'getPeriod',
            'prefix' => 'getPrefix',
            'keepday' => 'getKeepday',
            'bucket' => 'getBucket',
            'basePath' => 'getBasePath',
            'agency' => 'getAgency'
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['keepday'] = isset($data['keepday']) ? $data['keepday'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['prefix'] === null) {
            $invalidProperties[] = "'prefix' can't be null";
        }
        if ($this->container['keepday'] === null) {
            $invalidProperties[] = "'keepday' can't be null";
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
    * Gets period
    *  每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    *
    * @return string
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string $period 每天自动创建快照的时间点。只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets prefix
    *  自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @return string
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string $prefix 自动创建的快照的前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets keepday
    *  自动创建快照的保留天数。取值范围：1-90。
    *
    * @return int
    */
    public function getKeepday()
    {
        return $this->container['keepday'];
    }

    /**
    * Sets keepday
    *
    * @param int $keepday 自动创建快照的保留天数。取值范围：1-90。
    *
    * @return $this
    */
    public function setKeepday($keepday)
    {
        $this->container['keepday'] = $keepday;
        return $this;
    }

    /**
    * Gets bucket
    *  备份使用的OBS桶名称。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 备份使用的OBS桶名称。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets basePath
    *  快照在OBS桶中的存放路径。
    *
    * @return string|null
    */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
    * Sets basePath
    *
    * @param string|null $basePath 快照在OBS桶中的存放路径。
    *
    * @return $this
    */
    public function setBasePath($basePath)
    {
        $this->container['basePath'] = $basePath;
        return $this;
    }

    /**
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @return string|null
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string|null $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。   >如果bucket、basePath和agency三个参数同时为空，则系统会自动创建OBS桶和IAM代理（若创建失败，则需要手工配置正确的参数）。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
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

