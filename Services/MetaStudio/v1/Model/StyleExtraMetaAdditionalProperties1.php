<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StyleExtraMetaAdditionalProperties1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StyleExtraMeta_additionalProperties_1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    * matchComponent  算法输出所匹配的组件名
    * files  算法输出的文件名列表
    * classifiedTags  分类算法的标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'matchComponent' => 'string',
            'files' => 'string[]',
            'classifiedTags' => 'map[string,string[]]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    * matchComponent  算法输出所匹配的组件名
    * files  算法输出的文件名列表
    * classifiedTags  分类算法的标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'matchComponent' => null,
        'files' => null,
        'classifiedTags' => null
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
    * type  算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    * matchComponent  算法输出所匹配的组件名
    * files  算法输出的文件名列表
    * classifiedTags  分类算法的标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'matchComponent' => 'match_component',
            'files' => 'files',
            'classifiedTags' => 'classified_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    * matchComponent  算法输出所匹配的组件名
    * files  算法输出的文件名列表
    * classifiedTags  分类算法的标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'matchComponent' => 'setMatchComponent',
            'files' => 'setFiles',
            'classifiedTags' => 'setClassifiedTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    * matchComponent  算法输出所匹配的组件名
    * files  算法输出的文件名列表
    * classifiedTags  分类算法的标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'matchComponent' => 'getMatchComponent',
            'files' => 'getFiles',
            'classifiedTags' => 'getClassifiedTags'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['matchComponent'] = isset($data['matchComponent']) ? $data['matchComponent'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['classifiedTags'] = isset($data['classifiedTags']) ? $data['classifiedTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['matchComponent']) && (mb_strlen($this->container['matchComponent']) > 256)) {
                $invalidProperties[] = "invalid value for 'matchComponent', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['matchComponent']) && (mb_strlen($this->container['matchComponent']) < 0)) {
                $invalidProperties[] = "invalid value for 'matchComponent', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 算法类型枚举，\"CREATE\"还是\"CLASSIFY\"
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets matchComponent
    *  算法输出所匹配的组件名
    *
    * @return string|null
    */
    public function getMatchComponent()
    {
        return $this->container['matchComponent'];
    }

    /**
    * Sets matchComponent
    *
    * @param string|null $matchComponent 算法输出所匹配的组件名
    *
    * @return $this
    */
    public function setMatchComponent($matchComponent)
    {
        $this->container['matchComponent'] = $matchComponent;
        return $this;
    }

    /**
    * Gets files
    *  算法输出的文件名列表
    *
    * @return string[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param string[]|null $files 算法输出的文件名列表
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
        return $this;
    }

    /**
    * Gets classifiedTags
    *  分类算法的标签列表
    *
    * @return map[string,string[]]|null
    */
    public function getClassifiedTags()
    {
        return $this->container['classifiedTags'];
    }

    /**
    * Sets classifiedTags
    *
    * @param map[string,string[]]|null $classifiedTags 分类算法的标签列表
    *
    * @return $this
    */
    public function setClassifiedTags($classifiedTags)
    {
        $this->container['classifiedTags'] = $classifiedTags;
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

