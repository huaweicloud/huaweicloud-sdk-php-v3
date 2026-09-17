<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineTagResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineTagResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagId  **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagId' => 'string',
            'name' => 'string',
            'color' => 'string',
            'projectId' => 'string',
            'projectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagId  **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagId' => null,
        'name' => null,
        'color' => null,
        'projectId' => null,
        'projectName' => null
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
    * tagId  **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagId' => 'tag_id',
            'name' => 'name',
            'color' => 'color',
            'projectId' => 'project_id',
            'projectName' => 'project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagId  **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tagId' => 'setTagId',
            'name' => 'setName',
            'color' => 'setColor',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagId  **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tagId' => 'getTagId',
            'name' => 'getName',
            'color' => 'getColor',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName'
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
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
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
    * Gets tagId
    *  **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return string|null
    */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
    * Sets tagId
    *
    * @param string|null $tagId **参数解释**： 标签ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return $this
    */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 标签名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 标签名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets color
    *  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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

