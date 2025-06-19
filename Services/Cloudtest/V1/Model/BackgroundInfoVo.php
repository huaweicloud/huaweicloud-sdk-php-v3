<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackgroundInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackgroundInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目id
    * coverFileName  cover文件名称
    * backgroundFileName  背景文件名称
    * logoFileName  logo文件名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'coverFileName' => 'string',
            'backgroundFileName' => 'string',
            'logoFileName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目id
    * coverFileName  cover文件名称
    * backgroundFileName  背景文件名称
    * logoFileName  logo文件名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'coverFileName' => null,
        'backgroundFileName' => null,
        'logoFileName' => null
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
    * projectUuid  项目id
    * coverFileName  cover文件名称
    * backgroundFileName  背景文件名称
    * logoFileName  logo文件名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'project_uuid',
            'coverFileName' => 'cover_file_name',
            'backgroundFileName' => 'background_file_name',
            'logoFileName' => 'logo_file_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目id
    * coverFileName  cover文件名称
    * backgroundFileName  背景文件名称
    * logoFileName  logo文件名称
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'coverFileName' => 'setCoverFileName',
            'backgroundFileName' => 'setBackgroundFileName',
            'logoFileName' => 'setLogoFileName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目id
    * coverFileName  cover文件名称
    * backgroundFileName  背景文件名称
    * logoFileName  logo文件名称
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'coverFileName' => 'getCoverFileName',
            'backgroundFileName' => 'getBackgroundFileName',
            'logoFileName' => 'getLogoFileName'
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
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['coverFileName'] = isset($data['coverFileName']) ? $data['coverFileName'] : null;
        $this->container['backgroundFileName'] = isset($data['backgroundFileName']) ? $data['backgroundFileName'] : null;
        $this->container['logoFileName'] = isset($data['logoFileName']) ? $data['logoFileName'] : null;
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
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets coverFileName
    *  cover文件名称
    *
    * @return string|null
    */
    public function getCoverFileName()
    {
        return $this->container['coverFileName'];
    }

    /**
    * Sets coverFileName
    *
    * @param string|null $coverFileName cover文件名称
    *
    * @return $this
    */
    public function setCoverFileName($coverFileName)
    {
        $this->container['coverFileName'] = $coverFileName;
        return $this;
    }

    /**
    * Gets backgroundFileName
    *  背景文件名称
    *
    * @return string|null
    */
    public function getBackgroundFileName()
    {
        return $this->container['backgroundFileName'];
    }

    /**
    * Sets backgroundFileName
    *
    * @param string|null $backgroundFileName 背景文件名称
    *
    * @return $this
    */
    public function setBackgroundFileName($backgroundFileName)
    {
        $this->container['backgroundFileName'] = $backgroundFileName;
        return $this;
    }

    /**
    * Gets logoFileName
    *  logo文件名称
    *
    * @return string|null
    */
    public function getLogoFileName()
    {
        return $this->container['logoFileName'];
    }

    /**
    * Sets logoFileName
    *
    * @param string|null $logoFileName logo文件名称
    *
    * @return $this
    */
    public function setLogoFileName($logoFileName)
    {
        $this->container['logoFileName'] = $logoFileName;
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

