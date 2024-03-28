<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportFlinkJobsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportFlinkJobsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zipFile  OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    * isCover  若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zipFile' => 'string',
            'isCover' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zipFile  OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    * isCover  若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zipFile' => null,
        'isCover' => null
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
    * zipFile  OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    * isCover  若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zipFile' => 'zip_file',
            'isCover' => 'is_cover'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zipFile  OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    * isCover  若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @var string[]
    */
    protected static $setters = [
            'zipFile' => 'setZipFile',
            'isCover' => 'setIsCover'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zipFile  OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    * isCover  若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @var string[]
    */
    protected static $getters = [
            'zipFile' => 'getZipFile',
            'isCover' => 'getIsCover'
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
        $this->container['zipFile'] = isset($data['zipFile']) ? $data['zipFile'] : null;
        $this->container['isCover'] = isset($data['isCover']) ? $data['isCover'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zipFile'] === null) {
            $invalidProperties[] = "'zipFile' can't be null";
        }
            if ((mb_strlen($this->container['zipFile']) > 256)) {
                $invalidProperties[] = "invalid value for 'zipFile', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['zipFile']) < 1)) {
                $invalidProperties[] = "invalid value for 'zipFile', the character length must be bigger than or equal to 1.";
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
    * Gets zipFile
    *  OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    *
    * @return string
    */
    public function getZipFile()
    {
        return $this->container['zipFile'];
    }

    /**
    * Sets zipFile
    *
    * @param string $zipFile OBS上导入作业zip文件路径，支持填写目录，导入目录下所有zip文件。
    *
    * @return $this
    */
    public function setZipFile($zipFile)
    {
        $this->container['zipFile'] = $zipFile;
        return $this;
    }

    /**
    * Gets isCover
    *  若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @return bool|null
    */
    public function getIsCover()
    {
        return $this->container['isCover'];
    }

    /**
    * Sets isCover
    *
    * @param bool|null $isCover 若导入作业中存在与服务已有作业同名情况，是否将服务中已有作业覆盖。
    *
    * @return $this
    */
    public function setIsCover($isCover)
    {
        $this->container['isCover'] = $isCover;
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

