<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SinkObsParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SinkObsParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKey  AK
    * secretKey  SK
    * obsBucket  桶
    * obsPath  转储目录
    * timeFormat  时间目录格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKey' => 'string',
            'secretKey' => 'string',
            'obsBucket' => 'string',
            'obsPath' => 'string',
            'timeFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKey  AK
    * secretKey  SK
    * obsBucket  桶
    * obsPath  转储目录
    * timeFormat  时间目录格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKey' => null,
        'secretKey' => null,
        'obsBucket' => null,
        'obsPath' => null,
        'timeFormat' => null
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
    * accessKey  AK
    * secretKey  SK
    * obsBucket  桶
    * obsPath  转储目录
    * timeFormat  时间目录格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'obsBucket' => 'obs_bucket',
            'obsPath' => 'obs_path',
            'timeFormat' => 'time_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKey  AK
    * secretKey  SK
    * obsBucket  桶
    * obsPath  转储目录
    * timeFormat  时间目录格式
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'obsBucket' => 'setObsBucket',
            'obsPath' => 'setObsPath',
            'timeFormat' => 'setTimeFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKey  AK
    * secretKey  SK
    * obsBucket  桶
    * obsPath  转储目录
    * timeFormat  时间目录格式
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'obsBucket' => 'getObsBucket',
            'obsPath' => 'getObsPath',
            'timeFormat' => 'getTimeFormat'
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
    const TIME_FORMAT_YYYY = 'yyyy';
    const TIME_FORMAT_YYYY_MM = 'yyyy/MM';
    const TIME_FORMAT_YYYY_MM_DD = 'yyyy/MM/dd';
    const TIME_FORMAT_YYYY_MM_DD_HH = 'yyyy/MM/dd/HH';
    const TIME_FORMAT_YYYY_MM_DD_HH_MM = 'yyyy/MM/dd/HH/mm';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTimeFormatAllowableValues()
    {
        return [
            self::TIME_FORMAT_YYYY,
            self::TIME_FORMAT_YYYY_MM,
            self::TIME_FORMAT_YYYY_MM_DD,
            self::TIME_FORMAT_YYYY_MM_DD_HH,
            self::TIME_FORMAT_YYYY_MM_DD_HH_MM,
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
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['obsPath'] = isset($data['obsPath']) ? $data['obsPath'] : null;
        $this->container['timeFormat'] = isset($data['timeFormat']) ? $data['timeFormat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessKey'] === null) {
            $invalidProperties[] = "'accessKey' can't be null";
        }
            if ((mb_strlen($this->container['accessKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessKey', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['accessKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['secretKey'] === null) {
            $invalidProperties[] = "'secretKey' can't be null";
        }
        if ($this->container['obsBucket'] === null) {
            $invalidProperties[] = "'obsBucket' can't be null";
        }
            if (!is_null($this->container['obsPath']) && (mb_strlen($this->container['obsPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'obsPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['obsPath']) && (mb_strlen($this->container['obsPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsPath', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['timeFormat'] === null) {
            $invalidProperties[] = "'timeFormat' can't be null";
        }
            $allowedValues = $this->getTimeFormatAllowableValues();
                if (!is_null($this->container['timeFormat']) && !in_array($this->container['timeFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeFormat', must be one of '%s'",
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
    * Gets accessKey
    *  AK
    *
    * @return string
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string $accessKey AK
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets secretKey
    *  SK
    *
    * @return string
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string $secretKey SK
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets obsBucket
    *  桶
    *
    * @return string
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string $obsBucket 桶
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets obsPath
    *  转储目录
    *
    * @return string|null
    */
    public function getObsPath()
    {
        return $this->container['obsPath'];
    }

    /**
    * Sets obsPath
    *
    * @param string|null $obsPath 转储目录
    *
    * @return $this
    */
    public function setObsPath($obsPath)
    {
        $this->container['obsPath'] = $obsPath;
        return $this;
    }

    /**
    * Gets timeFormat
    *  时间目录格式
    *
    * @return string
    */
    public function getTimeFormat()
    {
        return $this->container['timeFormat'];
    }

    /**
    * Sets timeFormat
    *
    * @param string $timeFormat 时间目录格式
    *
    * @return $this
    */
    public function setTimeFormat($timeFormat)
    {
        $this->container['timeFormat'] = $timeFormat;
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

