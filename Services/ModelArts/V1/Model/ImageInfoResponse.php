<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 镜像id。 **取值范围：** 不涉及。
    * source  **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    * swrPath  **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    * category  **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'source' => 'string',
            'swrPath' => 'string',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 镜像id。 **取值范围：** 不涉及。
    * source  **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    * swrPath  **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    * category  **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'source' => null,
        'swrPath' => null,
        'category' => null
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
    * id  **参数解释：** 镜像id。 **取值范围：** 不涉及。
    * source  **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    * swrPath  **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    * category  **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'source' => 'source',
            'swrPath' => 'swr_path',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 镜像id。 **取值范围：** 不涉及。
    * source  **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    * swrPath  **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    * category  **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'source' => 'setSource',
            'swrPath' => 'setSwrPath',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 镜像id。 **取值范围：** 不涉及。
    * source  **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    * swrPath  **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    * category  **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'source' => 'getSource',
            'swrPath' => 'getSwrPath',
            'category' => 'getCategory'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['swrPath'] = isset($data['swrPath']) ? $data['swrPath'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['swrPath'] === null) {
            $invalidProperties[] = "'swrPath' can't be null";
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
    * Gets id
    *  **参数解释：** 镜像id。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释：** 镜像id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    *
    * @return string
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string $source **参数解释：** 镜像类别，标识镜像来源。 **取值范围：** - SWR：软件仓库服务。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets swrPath
    *  **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getSwrPath()
    {
        return $this->container['swrPath'];
    }

    /**
    * Sets swrPath
    *
    * @param string $swrPath **参数解释：** 镜像地址，source不同取值时，地址为不同值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSwrPath($swrPath)
    {
        $this->container['swrPath'] = $swrPath;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释：** 镜像支持的规格。 **取值范围：** - GPU：图形处理器。 - CPU：中央处理器。 - ASCEND：昇腾芯片。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

