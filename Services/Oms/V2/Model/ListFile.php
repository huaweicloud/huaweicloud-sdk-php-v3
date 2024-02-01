<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFile';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * listFileKey  对象列表文件或URL列表文件对象名。
    * obsBucket  存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileNum  存放对象列表文件的数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'listFileKey' => 'string',
            'obsBucket' => 'string',
            'listFileNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * listFileKey  对象列表文件或URL列表文件对象名。
    * obsBucket  存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileNum  存放对象列表文件的数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'listFileKey' => null,
        'obsBucket' => null,
        'listFileNum' => null
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
    * listFileKey  对象列表文件或URL列表文件对象名。
    * obsBucket  存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileNum  存放对象列表文件的数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'listFileKey' => 'list_file_key',
            'obsBucket' => 'obs_bucket',
            'listFileNum' => 'list_file_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * listFileKey  对象列表文件或URL列表文件对象名。
    * obsBucket  存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileNum  存放对象列表文件的数量
    *
    * @var string[]
    */
    protected static $setters = [
            'listFileKey' => 'setListFileKey',
            'obsBucket' => 'setObsBucket',
            'listFileNum' => 'setListFileNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * listFileKey  对象列表文件或URL列表文件对象名。
    * obsBucket  存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    * listFileNum  存放对象列表文件的数量
    *
    * @var string[]
    */
    protected static $getters = [
            'listFileKey' => 'getListFileKey',
            'obsBucket' => 'getObsBucket',
            'listFileNum' => 'getListFileNum'
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
        $this->container['listFileKey'] = isset($data['listFileKey']) ? $data['listFileKey'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['listFileNum'] = isset($data['listFileNum']) ? $data['listFileNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['listFileKey'] === null) {
            $invalidProperties[] = "'listFileKey' can't be null";
        }
            if ((mb_strlen($this->container['listFileKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'listFileKey', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['listFileKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'listFileKey', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['listFileNum']) && (mb_strlen($this->container['listFileNum']) > 65535)) {
                $invalidProperties[] = "invalid value for 'listFileNum', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['listFileNum']) && (mb_strlen($this->container['listFileNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'listFileNum', the character length must be bigger than or equal to 0.";
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
    * Gets obsBucket
    *  存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
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
    * @param string $obsBucket 存放对象列表文件的OBS桶名。  请确保与目的端桶处于同一区域，否则将导致任务创建失败。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets listFileNum
    *  存放对象列表文件的数量
    *
    * @return string|null
    */
    public function getListFileNum()
    {
        return $this->container['listFileNum'];
    }

    /**
    * Sets listFileNum
    *
    * @param string|null $listFileNum 存放对象列表文件的数量
    *
    * @return $this
    */
    public function setListFileNum($listFileNum)
    {
        $this->container['listFileNum'] = $listFileNum;
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

