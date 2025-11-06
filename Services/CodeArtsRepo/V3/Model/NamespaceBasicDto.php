<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NamespaceBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NamespaceBasicDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  namespace id
    * name  namespace name
    * path  namespace path
    * developMode  namespace 开发模式
    * region  namespace region
    * cell  namespace cell
    * kind  namespace kind
    * fullPath  namespace full path
    * fullName  namespace full name
    * parentId  namespace parent id
    * visibilityLevel  namespace visibility level
    * enableFileControl  namespace file control enable
    * ownerId  namespace owner id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'path' => 'string',
            'developMode' => 'string',
            'region' => 'string',
            'cell' => 'string',
            'kind' => 'string',
            'fullPath' => 'string',
            'fullName' => 'string',
            'parentId' => 'int',
            'visibilityLevel' => 'int',
            'enableFileControl' => 'bool',
            'ownerId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  namespace id
    * name  namespace name
    * path  namespace path
    * developMode  namespace 开发模式
    * region  namespace region
    * cell  namespace cell
    * kind  namespace kind
    * fullPath  namespace full path
    * fullName  namespace full name
    * parentId  namespace parent id
    * visibilityLevel  namespace visibility level
    * enableFileControl  namespace file control enable
    * ownerId  namespace owner id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'path' => null,
        'developMode' => null,
        'region' => null,
        'cell' => null,
        'kind' => null,
        'fullPath' => null,
        'fullName' => null,
        'parentId' => null,
        'visibilityLevel' => null,
        'enableFileControl' => null,
        'ownerId' => null
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
    * id  namespace id
    * name  namespace name
    * path  namespace path
    * developMode  namespace 开发模式
    * region  namespace region
    * cell  namespace cell
    * kind  namespace kind
    * fullPath  namespace full path
    * fullName  namespace full name
    * parentId  namespace parent id
    * visibilityLevel  namespace visibility level
    * enableFileControl  namespace file control enable
    * ownerId  namespace owner id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'path' => 'path',
            'developMode' => 'develop_mode',
            'region' => 'region',
            'cell' => 'cell',
            'kind' => 'kind',
            'fullPath' => 'full_path',
            'fullName' => 'full_name',
            'parentId' => 'parent_id',
            'visibilityLevel' => 'visibility_level',
            'enableFileControl' => 'enable_file_control',
            'ownerId' => 'owner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  namespace id
    * name  namespace name
    * path  namespace path
    * developMode  namespace 开发模式
    * region  namespace region
    * cell  namespace cell
    * kind  namespace kind
    * fullPath  namespace full path
    * fullName  namespace full name
    * parentId  namespace parent id
    * visibilityLevel  namespace visibility level
    * enableFileControl  namespace file control enable
    * ownerId  namespace owner id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'path' => 'setPath',
            'developMode' => 'setDevelopMode',
            'region' => 'setRegion',
            'cell' => 'setCell',
            'kind' => 'setKind',
            'fullPath' => 'setFullPath',
            'fullName' => 'setFullName',
            'parentId' => 'setParentId',
            'visibilityLevel' => 'setVisibilityLevel',
            'enableFileControl' => 'setEnableFileControl',
            'ownerId' => 'setOwnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  namespace id
    * name  namespace name
    * path  namespace path
    * developMode  namespace 开发模式
    * region  namespace region
    * cell  namespace cell
    * kind  namespace kind
    * fullPath  namespace full path
    * fullName  namespace full name
    * parentId  namespace parent id
    * visibilityLevel  namespace visibility level
    * enableFileControl  namespace file control enable
    * ownerId  namespace owner id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'path' => 'getPath',
            'developMode' => 'getDevelopMode',
            'region' => 'getRegion',
            'cell' => 'getCell',
            'kind' => 'getKind',
            'fullPath' => 'getFullPath',
            'fullName' => 'getFullName',
            'parentId' => 'getParentId',
            'visibilityLevel' => 'getVisibilityLevel',
            'enableFileControl' => 'getEnableFileControl',
            'ownerId' => 'getOwnerId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['cell'] = isset($data['cell']) ? $data['cell'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['enableFileControl'] = isset($data['enableFileControl']) ? $data['enableFileControl'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
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
    * Gets id
    *  namespace id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id namespace id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  namespace name
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
    * @param string|null $name namespace name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets path
    *  namespace path
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
    * @param string|null $path namespace path
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets developMode
    *  namespace 开发模式
    *
    * @return string|null
    */
    public function getDevelopMode()
    {
        return $this->container['developMode'];
    }

    /**
    * Sets developMode
    *
    * @param string|null $developMode namespace 开发模式
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets region
    *  namespace region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region namespace region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets cell
    *  namespace cell
    *
    * @return string|null
    */
    public function getCell()
    {
        return $this->container['cell'];
    }

    /**
    * Sets cell
    *
    * @param string|null $cell namespace cell
    *
    * @return $this
    */
    public function setCell($cell)
    {
        $this->container['cell'] = $cell;
        return $this;
    }

    /**
    * Gets kind
    *  namespace kind
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind namespace kind
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets fullPath
    *  namespace full path
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath namespace full path
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets fullName
    *  namespace full name
    *
    * @return string|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param string|null $fullName namespace full name
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
        return $this;
    }

    /**
    * Gets parentId
    *  namespace parent id
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId namespace parent id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  namespace visibility level
    *
    * @return int|null
    */
    public function getVisibilityLevel()
    {
        return $this->container['visibilityLevel'];
    }

    /**
    * Sets visibilityLevel
    *
    * @param int|null $visibilityLevel namespace visibility level
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets enableFileControl
    *  namespace file control enable
    *
    * @return bool|null
    */
    public function getEnableFileControl()
    {
        return $this->container['enableFileControl'];
    }

    /**
    * Sets enableFileControl
    *
    * @param bool|null $enableFileControl namespace file control enable
    *
    * @return $this
    */
    public function setEnableFileControl($enableFileControl)
    {
        $this->container['enableFileControl'] = $enableFileControl;
        return $this;
    }

    /**
    * Gets ownerId
    *  namespace owner id
    *
    * @return int|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param int|null $ownerId namespace owner id
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
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

