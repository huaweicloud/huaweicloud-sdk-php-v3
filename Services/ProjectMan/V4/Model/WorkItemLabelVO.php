<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemLabelVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemLabelVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
    * category  **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
    * labelType  **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * color  **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
    * title  **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    * type  **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    * state  **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    * modifiedBy  **参数解释：**  最近修改人。 **约束限制：**  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'category' => 'string',
            'labelType' => 'string',
            'color' => 'string',
            'title' => 'string',
            'type' => 'string',
            'state' => 'string',
            'modifiedBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
    * category  **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
    * labelType  **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * color  **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
    * title  **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    * type  **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    * state  **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    * modifiedBy  **参数解释：**  最近修改人。 **约束限制：**  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'category' => null,
        'labelType' => null,
        'color' => null,
        'title' => null,
        'type' => null,
        'state' => null,
        'modifiedBy' => null
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
    * id  **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
    * category  **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
    * labelType  **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * color  **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
    * title  **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    * type  **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    * state  **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    * modifiedBy  **参数解释：**  最近修改人。 **约束限制：**  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'category' => 'category',
            'labelType' => 'label_type',
            'color' => 'color',
            'title' => 'title',
            'type' => 'type',
            'state' => 'state',
            'modifiedBy' => 'modified_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
    * category  **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
    * labelType  **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * color  **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
    * title  **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    * type  **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    * state  **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    * modifiedBy  **参数解释：**  最近修改人。 **约束限制：**  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'category' => 'setCategory',
            'labelType' => 'setLabelType',
            'color' => 'setColor',
            'title' => 'setTitle',
            'type' => 'setType',
            'state' => 'setState',
            'modifiedBy' => 'setModifiedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
    * category  **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
    * labelType  **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * color  **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
    * title  **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    * type  **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    * state  **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    * modifiedBy  **参数解释：**  最近修改人。 **约束限制：**  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'category' => 'getCategory',
            'labelType' => 'getLabelType',
            'color' => 'getColor',
            'title' => 'getTitle',
            'type' => 'getType',
            'state' => 'getState',
            'modifiedBy' => 'getModifiedBy'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['labelType'] = isset($data['labelType']) ? $data['labelType'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
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
    *  **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
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
    * @param string|null $id **参数解释：**  标签Id。 **约束限制：**  最小长度：18，最大长度：19。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
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
    * @param string|null $category **参数解释：**  对象类型。 **约束限制：**  固定为Label，表示当前对象类型为标签。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets labelType
    *  **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    *
    * @return string|null
    */
    public function getLabelType()
    {
        return $this->container['labelType'];
    }

    /**
    * Sets labelType
    *
    * @param string|null $labelType **参数解释：**  标签所属的工作项的类别。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    *
    * @return $this
    */
    public function setLabelType($labelType)
    {
        $this->container['labelType'] = $labelType;
        return $this;
    }

    /**
    * Gets color
    *  **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
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
    * @param string|null $color **参数解释：**  标签颜色的RGB值。 **取值范围：**  - #86CAFF - #6DDEBB - #A6DD82 - #FAC20A  - #FA9841 - #F66F6A - #F3689A - #A97AF8 - #71757F - #5E7CE0 - #207AB3 - #169E6C - #6CA83B - #B58200 - #B54E04 - #B02121 - #AD215B - #572DB3 - #4F4F4F - #3C51A6
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：**  标签标题。 **约束限制：**  最小长度：1，最大长度：30。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：**  表示当前对象数据类型为标签。 **约束限制：**  固定为label。 **取值范围：**  label。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释：**  标签的生命周期。 **取值范围：**  - 正在工作 - 作废 - 删除
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  **参数解释：**  最近修改人。 **约束限制：**  不涉及。
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
    * @param string|null $modifiedBy **参数解释：**  最近修改人。 **约束限制：**  不涉及。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
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

