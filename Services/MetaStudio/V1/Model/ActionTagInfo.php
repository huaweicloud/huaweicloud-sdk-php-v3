<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionTagInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionTagInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionDuration  动作时长
    * catalog  动作分类名称。
    * fileName  样例视频文件名，最大长度256，最小长度1。
    * tag  动作标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionNameZh' => 'string',
            'actionNameEn' => 'string',
            'actionDuration' => 'float',
            'catalog' => 'string',
            'fileName' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionDuration  动作时长
    * catalog  动作分类名称。
    * fileName  样例视频文件名，最大长度256，最小长度1。
    * tag  动作标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionNameZh' => null,
        'actionNameEn' => null,
        'actionDuration' => 'float',
        'catalog' => null,
        'fileName' => null,
        'tag' => null
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
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionDuration  动作时长
    * catalog  动作分类名称。
    * fileName  样例视频文件名，最大长度256，最小长度1。
    * tag  动作标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionNameZh' => 'action_name_zh',
            'actionNameEn' => 'action_name_en',
            'actionDuration' => 'action_duration',
            'catalog' => 'catalog',
            'fileName' => 'file_name',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionDuration  动作时长
    * catalog  动作分类名称。
    * fileName  样例视频文件名，最大长度256，最小长度1。
    * tag  动作标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionNameZh' => 'setActionNameZh',
            'actionNameEn' => 'setActionNameEn',
            'actionDuration' => 'setActionDuration',
            'catalog' => 'setCatalog',
            'fileName' => 'setFileName',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionDuration  动作时长
    * catalog  动作分类名称。
    * fileName  样例视频文件名，最大长度256，最小长度1。
    * tag  动作标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionNameZh' => 'getActionNameZh',
            'actionNameEn' => 'getActionNameEn',
            'actionDuration' => 'getActionDuration',
            'catalog' => 'getCatalog',
            'fileName' => 'getFileName',
            'tag' => 'getTag'
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
        $this->container['actionNameZh'] = isset($data['actionNameZh']) ? $data['actionNameZh'] : null;
        $this->container['actionNameEn'] = isset($data['actionNameEn']) ? $data['actionNameEn'] : null;
        $this->container['actionDuration'] = isset($data['actionDuration']) ? $data['actionDuration'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['actionNameZh'] === null) {
            $invalidProperties[] = "'actionNameZh' can't be null";
        }
            if ((mb_strlen($this->container['actionNameZh']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['actionNameZh']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['actionNameEn'] === null) {
            $invalidProperties[] = "'actionNameEn' can't be null";
        }
            if ((mb_strlen($this->container['actionNameEn']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['actionNameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionDuration']) && ($this->container['actionDuration'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'actionDuration', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['actionDuration']) && ($this->container['actionDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'actionDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['catalog']) && (mb_strlen($this->container['catalog']) > 128)) {
                $invalidProperties[] = "invalid value for 'catalog', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['catalog']) && (mb_strlen($this->container['catalog']) < 0)) {
                $invalidProperties[] = "invalid value for 'catalog', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && !preg_match("/^[A-Za-z0-9-!$'(),.+=@_~\/]{1,}[A-Za-z0-9-!$'(),.+=@_~]*$/", $this->container['fileName'])) {
                $invalidProperties[] = "invalid value for 'fileName', must be conform to the pattern /^[A-Za-z0-9-!$'(),.+=@_~\/]{1,}[A-Za-z0-9-!$'(),.+=@_~]*$/.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 256)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 1)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^[A-Za-z0-9-!$'(),.+=@_~\/]{1,}[A-Za-z0-9-!$'(),.+=@_~]*$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^[A-Za-z0-9-!$'(),.+=@_~\/]{1,}[A-Za-z0-9-!$'(),.+=@_~]*$/.";
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
    * Gets actionNameZh
    *  原子动作中文名称。
    *
    * @return string
    */
    public function getActionNameZh()
    {
        return $this->container['actionNameZh'];
    }

    /**
    * Sets actionNameZh
    *
    * @param string $actionNameZh 原子动作中文名称。
    *
    * @return $this
    */
    public function setActionNameZh($actionNameZh)
    {
        $this->container['actionNameZh'] = $actionNameZh;
        return $this;
    }

    /**
    * Gets actionNameEn
    *  原子动作英文名称。
    *
    * @return string
    */
    public function getActionNameEn()
    {
        return $this->container['actionNameEn'];
    }

    /**
    * Sets actionNameEn
    *
    * @param string $actionNameEn 原子动作英文名称。
    *
    * @return $this
    */
    public function setActionNameEn($actionNameEn)
    {
        $this->container['actionNameEn'] = $actionNameEn;
        return $this;
    }

    /**
    * Gets actionDuration
    *  动作时长
    *
    * @return float|null
    */
    public function getActionDuration()
    {
        return $this->container['actionDuration'];
    }

    /**
    * Sets actionDuration
    *
    * @param float|null $actionDuration 动作时长
    *
    * @return $this
    */
    public function setActionDuration($actionDuration)
    {
        $this->container['actionDuration'] = $actionDuration;
        return $this;
    }

    /**
    * Gets catalog
    *  动作分类名称。
    *
    * @return string|null
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param string|null $catalog 动作分类名称。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
        return $this;
    }

    /**
    * Gets fileName
    *  样例视频文件名，最大长度256，最小长度1。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 样例视频文件名，最大长度256，最小长度1。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets tag
    *  动作标签。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 动作标签。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

