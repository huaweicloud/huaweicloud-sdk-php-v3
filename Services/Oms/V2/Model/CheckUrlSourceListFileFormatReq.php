<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckUrlSourceListFileFormatReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckUrlSourceListFileFormatReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsBucket  存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileKey  对象列表文件或URL列表文件对象名。
    * ak  目的端桶的AK（最大长度100个字符）。
    * sk  目的端桶的SK（最大长度100个字符）。
    * region  桶所处的区域。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsBucket' => 'string',
            'listFileKey' => 'string',
            'ak' => 'string',
            'sk' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsBucket  存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileKey  对象列表文件或URL列表文件对象名。
    * ak  目的端桶的AK（最大长度100个字符）。
    * sk  目的端桶的SK（最大长度100个字符）。
    * region  桶所处的区域。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsBucket' => null,
        'listFileKey' => null,
        'ak' => null,
        'sk' => null,
        'region' => null
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
    * obsBucket  存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileKey  对象列表文件或URL列表文件对象名。
    * ak  目的端桶的AK（最大长度100个字符）。
    * sk  目的端桶的SK（最大长度100个字符）。
    * region  桶所处的区域。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsBucket' => 'obs_bucket',
            'listFileKey' => 'list_file_key',
            'ak' => 'ak',
            'sk' => 'sk',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsBucket  存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileKey  对象列表文件或URL列表文件对象名。
    * ak  目的端桶的AK（最大长度100个字符）。
    * sk  目的端桶的SK（最大长度100个字符）。
    * region  桶所处的区域。
    *
    * @var string[]
    */
    protected static $setters = [
            'obsBucket' => 'setObsBucket',
            'listFileKey' => 'setListFileKey',
            'ak' => 'setAk',
            'sk' => 'setSk',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsBucket  存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileKey  对象列表文件或URL列表文件对象名。
    * ak  目的端桶的AK（最大长度100个字符）。
    * sk  目的端桶的SK（最大长度100个字符）。
    * region  桶所处的区域。
    *
    * @var string[]
    */
    protected static $getters = [
            'obsBucket' => 'getObsBucket',
            'listFileKey' => 'getListFileKey',
            'ak' => 'getAk',
            'sk' => 'getSk',
            'region' => 'getRegion'
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
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['listFileKey'] = isset($data['listFileKey']) ? $data['listFileKey'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['obsBucket'] === null) {
            $invalidProperties[] = "'obsBucket' can't be null";
        }
            if ((mb_strlen($this->container['obsBucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'obsBucket', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['obsBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'obsBucket', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['obsBucket'])) {
                $invalidProperties[] = "invalid value for 'obsBucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['listFileKey'] === null) {
            $invalidProperties[] = "'listFileKey' can't be null";
        }
            if ((mb_strlen($this->container['listFileKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'listFileKey', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['listFileKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'listFileKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ak'] === null) {
            $invalidProperties[] = "'ak' can't be null";
        }
            if ((mb_strlen($this->container['ak']) > 100)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['ak']) < 0)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['ak'])) {
                $invalidProperties[] = "invalid value for 'ak', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['sk'] === null) {
            $invalidProperties[] = "'sk' can't be null";
        }
            if ((mb_strlen($this->container['sk']) > 100)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['sk']) < 0)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['sk'])) {
                $invalidProperties[] = "invalid value for 'sk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets obsBucket
    *  存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
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
    * @param string $obsBucket 存放对象列表文件的OBS桶名。 请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets listFileKey
    *  对象列表文件或URL列表文件对象名。
    *
    * @return string
    */
    public function getListFileKey()
    {
        return $this->container['listFileKey'];
    }

    /**
    * Sets listFileKey
    *
    * @param string $listFileKey 对象列表文件或URL列表文件对象名。
    *
    * @return $this
    */
    public function setListFileKey($listFileKey)
    {
        $this->container['listFileKey'] = $listFileKey;
        return $this;
    }

    /**
    * Gets ak
    *  目的端桶的AK（最大长度100个字符）。
    *
    * @return string
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string $ak 目的端桶的AK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets sk
    *  目的端桶的SK（最大长度100个字符）。
    *
    * @return string
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string $sk 目的端桶的SK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;
        return $this;
    }

    /**
    * Gets region
    *  桶所处的区域。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 桶所处的区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

