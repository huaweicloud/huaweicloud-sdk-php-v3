<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FeatureSetOpenApiVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FeatureSetOpenApiVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  特性集ID
    * number  编号
    * parentId  父特性集ID
    * title  标题
    * positionFloat  位置信息
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * createdDate  **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    * childFs  子特性集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'number' => 'string',
            'parentId' => 'string',
            'title' => 'string',
            'positionFloat' => 'float',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'createdDate' => 'string',
            'modifiedDate' => 'string',
            'childFs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FeatureSetOpenApiVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  特性集ID
    * number  编号
    * parentId  父特性集ID
    * title  标题
    * positionFloat  位置信息
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * createdDate  **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    * childFs  子特性集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'number' => null,
        'parentId' => null,
        'title' => null,
        'positionFloat' => 'float',
        'createdBy' => null,
        'modifiedBy' => null,
        'createdDate' => null,
        'modifiedDate' => null,
        'childFs' => null
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
    * id  特性集ID
    * number  编号
    * parentId  父特性集ID
    * title  标题
    * positionFloat  位置信息
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * createdDate  **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    * childFs  子特性集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'number' => 'number',
            'parentId' => 'parent_id',
            'title' => 'title',
            'positionFloat' => 'position_float',
            'createdBy' => 'created_by',
            'modifiedBy' => 'modified_by',
            'createdDate' => 'created_date',
            'modifiedDate' => 'modified_date',
            'childFs' => 'child_fs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  特性集ID
    * number  编号
    * parentId  父特性集ID
    * title  标题
    * positionFloat  位置信息
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * createdDate  **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    * childFs  子特性集
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'number' => 'setNumber',
            'parentId' => 'setParentId',
            'title' => 'setTitle',
            'positionFloat' => 'setPositionFloat',
            'createdBy' => 'setCreatedBy',
            'modifiedBy' => 'setModifiedBy',
            'createdDate' => 'setCreatedDate',
            'modifiedDate' => 'setModifiedDate',
            'childFs' => 'setChildFs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  特性集ID
    * number  编号
    * parentId  父特性集ID
    * title  标题
    * positionFloat  位置信息
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * createdDate  **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    * childFs  子特性集
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'number' => 'getNumber',
            'parentId' => 'getParentId',
            'title' => 'getTitle',
            'positionFloat' => 'getPositionFloat',
            'createdBy' => 'getCreatedBy',
            'modifiedBy' => 'getModifiedBy',
            'createdDate' => 'getCreatedDate',
            'modifiedDate' => 'getModifiedDate',
            'childFs' => 'getChildFs'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['positionFloat'] = isset($data['positionFloat']) ? $data['positionFloat'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['childFs'] = isset($data['childFs']) ? $data['childFs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 20)) {
                $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 16)) {
                $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 19)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 18)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 512)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) > 14)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be smaller than or equal to 14.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) < 13)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['modifiedDate']) && (mb_strlen($this->container['modifiedDate']) > 14)) {
                $invalidProperties[] = "invalid value for 'modifiedDate', the character length must be smaller than or equal to 14.";
            }
            if (!is_null($this->container['modifiedDate']) && (mb_strlen($this->container['modifiedDate']) < 13)) {
                $invalidProperties[] = "invalid value for 'modifiedDate', the character length must be bigger than or equal to 13.";
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
    *  特性集ID
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
    * @param string|null $id 特性集ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets number
    *  编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets parentId
    *  父特性集ID
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父特性集ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets title
    *  标题
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
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets positionFloat
    *  位置信息
    *
    * @return float|null
    */
    public function getPositionFloat()
    {
        return $this->container['positionFloat'];
    }

    /**
    * Sets positionFloat
    *
    * @param float|null $positionFloat 位置信息
    *
    * @return $this
    */
    public function setPositionFloat($positionFloat)
    {
        $this->container['positionFloat'] = $positionFloat;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate **参数解释**： 特性集创建时间的时间戳。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate **参数解释**： 特性集修改时间的时间戳。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets childFs
    *  子特性集
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\FeatureSetOpenApiVO[]|null
    */
    public function getChildFs()
    {
        return $this->container['childFs'];
    }

    /**
    * Sets childFs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FeatureSetOpenApiVO[]|null $childFs 子特性集
    *
    * @return $this
    */
    public function setChildFs($childFs)
    {
        $this->container['childFs'] = $childFs;
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

