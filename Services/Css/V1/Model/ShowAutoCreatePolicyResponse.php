<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAutoCreatePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAutoCreatePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keepday  快照保留的天数。
    * period  每天快照创建时刻。
    * prefix  快照命名前缀，需要用户自己手动输入。
    * bucket  快照存放的OBS桶的桶名。
    * basePath  快照在OBS桶中的存放路径。
    * agency  访问OBS桶用到的委托。
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepday' => 'int',
            'period' => 'string',
            'prefix' => 'string',
            'bucket' => 'string',
            'basePath' => 'string',
            'agency' => 'string',
            'enable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepday  快照保留的天数。
    * period  每天快照创建时刻。
    * prefix  快照命名前缀，需要用户自己手动输入。
    * bucket  快照存放的OBS桶的桶名。
    * basePath  快照在OBS桶中的存放路径。
    * agency  访问OBS桶用到的委托。
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepday' => null,
        'period' => null,
        'prefix' => null,
        'bucket' => null,
        'basePath' => null,
        'agency' => null,
        'enable' => null
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
    * keepday  快照保留的天数。
    * period  每天快照创建时刻。
    * prefix  快照命名前缀，需要用户自己手动输入。
    * bucket  快照存放的OBS桶的桶名。
    * basePath  快照在OBS桶中的存放路径。
    * agency  访问OBS桶用到的委托。
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepday' => 'keepday',
            'period' => 'period',
            'prefix' => 'prefix',
            'bucket' => 'bucket',
            'basePath' => 'basePath',
            'agency' => 'agency',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepday  快照保留的天数。
    * period  每天快照创建时刻。
    * prefix  快照命名前缀，需要用户自己手动输入。
    * bucket  快照存放的OBS桶的桶名。
    * basePath  快照在OBS桶中的存放路径。
    * agency  访问OBS桶用到的委托。
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'keepday' => 'setKeepday',
            'period' => 'setPeriod',
            'prefix' => 'setPrefix',
            'bucket' => 'setBucket',
            'basePath' => 'setBasePath',
            'agency' => 'setAgency',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepday  快照保留的天数。
    * period  每天快照创建时刻。
    * prefix  快照命名前缀，需要用户自己手动输入。
    * bucket  快照存放的OBS桶的桶名。
    * basePath  快照在OBS桶中的存放路径。
    * agency  访问OBS桶用到的委托。
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'keepday' => 'getKeepday',
            'period' => 'getPeriod',
            'prefix' => 'getPrefix',
            'bucket' => 'getBucket',
            'basePath' => 'getBasePath',
            'agency' => 'getAgency',
            'enable' => 'getEnable'
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
        $this->container['keepday'] = isset($data['keepday']) ? $data['keepday'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets keepday
    *  快照保留的天数。
    *
    * @return int|null
    */
    public function getKeepday()
    {
        return $this->container['keepday'];
    }

    /**
    * Sets keepday
    *
    * @param int|null $keepday 快照保留的天数。
    *
    * @return $this
    */
    public function setKeepday($keepday)
    {
        $this->container['keepday'] = $keepday;
        return $this;
    }

    /**
    * Gets period
    *  每天快照创建时刻。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 每天快照创建时刻。
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
    *  快照命名前缀，需要用户自己手动输入。
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 快照命名前缀，需要用户自己手动输入。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets bucket
    *  快照存放的OBS桶的桶名。
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
    * @param string|null $bucket 快照存放的OBS桶的桶名。
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
    *  访问OBS桶用到的委托。
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
    * @param string|null $agency 访问OBS桶用到的委托。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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

