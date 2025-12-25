<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFileTreeResultChildren implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFileTreeResult_children';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    * uri  **参数解释**: 访问地址。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * modified  **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * folder  **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    * modifiedBy  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * hasChild  **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'uri' => 'string',
            'path' => 'string',
            'modified' => 'string',
            'folder' => 'bool',
            'modifiedBy' => 'string',
            'hasChild' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    * uri  **参数解释**: 访问地址。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * modified  **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * folder  **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    * modifiedBy  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * hasChild  **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'uri' => null,
        'path' => null,
        'modified' => null,
        'folder' => null,
        'modifiedBy' => null,
        'hasChild' => null
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
    * name  **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    * uri  **参数解释**: 访问地址。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * modified  **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * folder  **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    * modifiedBy  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * hasChild  **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'uri' => 'uri',
            'path' => 'path',
            'modified' => 'modified',
            'folder' => 'folder',
            'modifiedBy' => 'modified_by',
            'hasChild' => 'has_child'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    * uri  **参数解释**: 访问地址。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * modified  **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * folder  **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    * modifiedBy  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * hasChild  **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'uri' => 'setUri',
            'path' => 'setPath',
            'modified' => 'setModified',
            'folder' => 'setFolder',
            'modifiedBy' => 'setModifiedBy',
            'hasChild' => 'setHasChild'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    * uri  **参数解释**: 访问地址。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * modified  **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * folder  **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    * modifiedBy  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * hasChild  **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'uri' => 'getUri',
            'path' => 'getPath',
            'modified' => 'getModified',
            'folder' => 'getFolder',
            'modifiedBy' => 'getModifiedBy',
            'hasChild' => 'getHasChild'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['hasChild'] = isset($data['hasChild']) ? $data['hasChild'] : null;
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
    * Gets name
    *  **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**: 文件或文件夹名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**: 访问地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri **参数解释**: 访问地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 路径。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 路径。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets modified
    *  **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
    * Sets modified
    *
    * @param string|null $modified **参数解释**: 更新时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;
        return $this;
    }

    /**
    * Gets folder
    *  **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    *
    * @return bool|null
    */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
    * Sets folder
    *
    * @param bool|null $folder **参数解释**: 是否为文件夹。 **取值范围**: true：文件夹。 false：文件。
    *
    * @return $this
    */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  **参数解释**: 修改人。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy **参数解释**: 修改人。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets hasChild
    *  **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @return bool|null
    */
    public function getHasChild()
    {
        return $this->container['hasChild'];
    }

    /**
    * Sets hasChild
    *
    * @param bool|null $hasChild **参数解释**: 是否存在下一层。 **取值范围**: true：是。 false：否。
    *
    * @return $this
    */
    public function setHasChild($hasChild)
    {
        $this->container['hasChild'] = $hasChild;
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

