<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionListViewV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionListViewV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
    * buildVersion  **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    * filesCount  **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'buildVersion' => 'string',
            'filesCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
    * buildVersion  **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    * filesCount  **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'buildVersion' => null,
        'filesCount' => 'int32'
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
    * category  **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
    * buildVersion  **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    * filesCount  **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'buildVersion' => 'build_version',
            'filesCount' => 'files_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
    * buildVersion  **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    * filesCount  **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'buildVersion' => 'setBuildVersion',
            'filesCount' => 'setFilesCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
    * buildVersion  **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    * filesCount  **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'buildVersion' => 'getBuildVersion',
            'filesCount' => 'getFilesCount'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['buildVersion'] = isset($data['buildVersion']) ? $data['buildVersion'] : null;
        $this->container['filesCount'] = isset($data['filesCount']) ? $data['filesCount'] : null;
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
    * Gets category
    *  **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
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
    * @param string|null $category **参数解释**： 发布库版本的状态。 **取值范围**： - test：测试包。 - prod：发布包。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets buildVersion
    *  **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBuildVersion()
    {
        return $this->container['buildVersion'];
    }

    /**
    * Sets buildVersion
    *
    * @param string|null $buildVersion **参数解释**： 发布库版本的名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBuildVersion($buildVersion)
    {
        $this->container['buildVersion'] = $buildVersion;
        return $this;
    }

    /**
    * Gets filesCount
    *  **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getFilesCount()
    {
        return $this->container['filesCount'];
    }

    /**
    * Sets filesCount
    *
    * @param int|null $filesCount **参数解释**： 版本下的文件个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFilesCount($filesCount)
    {
        $this->container['filesCount'] = $filesCount;
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

