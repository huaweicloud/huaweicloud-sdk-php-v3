<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDependencyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDependencyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  依赖包版本ID。
    * owner  依赖包拥有者。
    * link  依赖包在obs的存储地址。
    * runtime  运行时语言。
    * etag  依赖包唯一标志。
    * size  依赖包大小。
    * name  依赖包名。
    * description  依赖包描述。
    * fileName  依赖包文件名。
    * version  依赖包版本号
    * depId  依赖包ID
    * lastModified  依赖包更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'owner' => 'string',
            'link' => 'string',
            'runtime' => 'string',
            'etag' => 'string',
            'size' => 'int',
            'name' => 'string',
            'description' => 'string',
            'fileName' => 'string',
            'version' => 'int',
            'depId' => 'string',
            'lastModified' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  依赖包版本ID。
    * owner  依赖包拥有者。
    * link  依赖包在obs的存储地址。
    * runtime  运行时语言。
    * etag  依赖包唯一标志。
    * size  依赖包大小。
    * name  依赖包名。
    * description  依赖包描述。
    * fileName  依赖包文件名。
    * version  依赖包版本号
    * depId  依赖包ID
    * lastModified  依赖包更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'owner' => null,
        'link' => null,
        'runtime' => null,
        'etag' => null,
        'size' => 'int64',
        'name' => null,
        'description' => null,
        'fileName' => null,
        'version' => 'int64',
        'depId' => null,
        'lastModified' => 'int64'
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
    * id  依赖包版本ID。
    * owner  依赖包拥有者。
    * link  依赖包在obs的存储地址。
    * runtime  运行时语言。
    * etag  依赖包唯一标志。
    * size  依赖包大小。
    * name  依赖包名。
    * description  依赖包描述。
    * fileName  依赖包文件名。
    * version  依赖包版本号
    * depId  依赖包ID
    * lastModified  依赖包更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'owner' => 'owner',
            'link' => 'link',
            'runtime' => 'runtime',
            'etag' => 'etag',
            'size' => 'size',
            'name' => 'name',
            'description' => 'description',
            'fileName' => 'file_name',
            'version' => 'version',
            'depId' => 'dep_id',
            'lastModified' => 'last_modified'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  依赖包版本ID。
    * owner  依赖包拥有者。
    * link  依赖包在obs的存储地址。
    * runtime  运行时语言。
    * etag  依赖包唯一标志。
    * size  依赖包大小。
    * name  依赖包名。
    * description  依赖包描述。
    * fileName  依赖包文件名。
    * version  依赖包版本号
    * depId  依赖包ID
    * lastModified  依赖包更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'owner' => 'setOwner',
            'link' => 'setLink',
            'runtime' => 'setRuntime',
            'etag' => 'setEtag',
            'size' => 'setSize',
            'name' => 'setName',
            'description' => 'setDescription',
            'fileName' => 'setFileName',
            'version' => 'setVersion',
            'depId' => 'setDepId',
            'lastModified' => 'setLastModified'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  依赖包版本ID。
    * owner  依赖包拥有者。
    * link  依赖包在obs的存储地址。
    * runtime  运行时语言。
    * etag  依赖包唯一标志。
    * size  依赖包大小。
    * name  依赖包名。
    * description  依赖包描述。
    * fileName  依赖包文件名。
    * version  依赖包版本号
    * depId  依赖包ID
    * lastModified  依赖包更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'owner' => 'getOwner',
            'link' => 'getLink',
            'runtime' => 'getRuntime',
            'etag' => 'getEtag',
            'size' => 'getSize',
            'name' => 'getName',
            'description' => 'getDescription',
            'fileName' => 'getFileName',
            'version' => 'getVersion',
            'depId' => 'getDepId',
            'lastModified' => 'getLastModified'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['depId'] = isset($data['depId']) ? $data['depId'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
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
    *  依赖包版本ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 依赖包版本ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets owner
    *  依赖包拥有者。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 依赖包拥有者。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets link
    *  依赖包在obs的存储地址。
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link 依赖包在obs的存储地址。
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets runtime
    *  运行时语言。
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime 运行时语言。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets etag
    *  依赖包唯一标志。
    *
    * @return string|null
    */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
    * Sets etag
    *
    * @param string|null $etag 依赖包唯一标志。
    *
    * @return $this
    */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;
        return $this;
    }

    /**
    * Gets size
    *  依赖包大小。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 依赖包大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets name
    *  依赖包名。
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
    * @param string|null $name 依赖包名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  依赖包描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 依赖包描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets fileName
    *  依赖包文件名。
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
    * @param string|null $fileName 依赖包文件名。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets version
    *  依赖包版本号
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 依赖包版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets depId
    *  依赖包ID
    *
    * @return string|null
    */
    public function getDepId()
    {
        return $this->container['depId'];
    }

    /**
    * Sets depId
    *
    * @param string|null $depId 依赖包ID
    *
    * @return $this
    */
    public function setDepId($depId)
    {
        $this->container['depId'] = $depId;
        return $this;
    }

    /**
    * Gets lastModified
    *  依赖包更新时间
    *
    * @return int|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param int|null $lastModified 依赖包更新时间
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
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

