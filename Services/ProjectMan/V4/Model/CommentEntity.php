<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommentEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommentEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 评论ID。 **默认取值**： 不涉及。
    * category  **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    * type  **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
    * top  **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    * topTime  **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    * description  **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
    * issueId  **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    * topFlag  **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    * createdBy  **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    * createdDate  **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
    * creatorInfo  creatorInfo
    * extendAttribute  **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    * extendAttributeObj  extendAttributeObj
    * extendAttributeObjs  **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'category' => 'string',
            'type' => 'string',
            'top' => 'bool',
            'topTime' => 'string',
            'description' => 'string',
            'issueId' => 'string',
            'topFlag' => 'bool',
            'createdBy' => 'string',
            'createdDate' => 'string',
            'creatorInfo' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'extendAttribute' => 'string',
            'extendAttributeObj' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CommentExtendAttribute',
            'extendAttributeObjs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CommentExtendAttribute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 评论ID。 **默认取值**： 不涉及。
    * category  **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    * type  **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
    * top  **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    * topTime  **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    * description  **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
    * issueId  **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    * topFlag  **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    * createdBy  **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    * createdDate  **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
    * creatorInfo  creatorInfo
    * extendAttribute  **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    * extendAttributeObj  extendAttributeObj
    * extendAttributeObjs  **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'category' => null,
        'type' => null,
        'top' => null,
        'topTime' => null,
        'description' => null,
        'issueId' => null,
        'topFlag' => null,
        'createdBy' => null,
        'createdDate' => null,
        'creatorInfo' => null,
        'extendAttribute' => null,
        'extendAttributeObj' => null,
        'extendAttributeObjs' => null
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
    * id  **参数解释**： 评论ID。 **默认取值**： 不涉及。
    * category  **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    * type  **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
    * top  **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    * topTime  **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    * description  **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
    * issueId  **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    * topFlag  **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    * createdBy  **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    * createdDate  **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
    * creatorInfo  creatorInfo
    * extendAttribute  **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    * extendAttributeObj  extendAttributeObj
    * extendAttributeObjs  **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'category' => 'category',
            'type' => 'type',
            'top' => 'top',
            'topTime' => 'top_time',
            'description' => 'description',
            'issueId' => 'issue_id',
            'topFlag' => 'top_flag',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'creatorInfo' => 'creator_info',
            'extendAttribute' => 'extend_attribute',
            'extendAttributeObj' => 'extend_attribute_obj',
            'extendAttributeObjs' => 'extend_attribute_objs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 评论ID。 **默认取值**： 不涉及。
    * category  **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    * type  **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
    * top  **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    * topTime  **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    * description  **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
    * issueId  **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    * topFlag  **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    * createdBy  **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    * createdDate  **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
    * creatorInfo  creatorInfo
    * extendAttribute  **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    * extendAttributeObj  extendAttributeObj
    * extendAttributeObjs  **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'category' => 'setCategory',
            'type' => 'setType',
            'top' => 'setTop',
            'topTime' => 'setTopTime',
            'description' => 'setDescription',
            'issueId' => 'setIssueId',
            'topFlag' => 'setTopFlag',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'creatorInfo' => 'setCreatorInfo',
            'extendAttribute' => 'setExtendAttribute',
            'extendAttributeObj' => 'setExtendAttributeObj',
            'extendAttributeObjs' => 'setExtendAttributeObjs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 评论ID。 **默认取值**： 不涉及。
    * category  **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    * type  **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
    * top  **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    * topTime  **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    * description  **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
    * issueId  **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    * topFlag  **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    * createdBy  **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    * createdDate  **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
    * creatorInfo  creatorInfo
    * extendAttribute  **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    * extendAttributeObj  extendAttributeObj
    * extendAttributeObjs  **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'category' => 'getCategory',
            'type' => 'getType',
            'top' => 'getTop',
            'topTime' => 'getTopTime',
            'description' => 'getDescription',
            'issueId' => 'getIssueId',
            'topFlag' => 'getTopFlag',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'creatorInfo' => 'getCreatorInfo',
            'extendAttribute' => 'getExtendAttribute',
            'extendAttributeObj' => 'getExtendAttributeObj',
            'extendAttributeObjs' => 'getExtendAttributeObjs'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['topTime'] = isset($data['topTime']) ? $data['topTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['topFlag'] = isset($data['topFlag']) ? $data['topFlag'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['creatorInfo'] = isset($data['creatorInfo']) ? $data['creatorInfo'] : null;
        $this->container['extendAttribute'] = isset($data['extendAttribute']) ? $data['extendAttribute'] : null;
        $this->container['extendAttributeObj'] = isset($data['extendAttributeObj']) ? $data['extendAttributeObj'] : null;
        $this->container['extendAttributeObjs'] = isset($data['extendAttributeObjs']) ? $data['extendAttributeObjs'] : null;
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
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) > 19)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) < 18)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) > 19)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) < 10)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['extendAttribute']) && (mb_strlen($this->container['extendAttribute']) > 10000)) {
                $invalidProperties[] = "invalid value for 'extendAttribute', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['extendAttribute']) && (mb_strlen($this->container['extendAttribute']) < 0)) {
                $invalidProperties[] = "invalid value for 'extendAttribute', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 评论ID。 **默认取值**： 不涉及。
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
    * @param string|null $id **参数解释**： 评论ID。 **默认取值**： 不涉及。
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
    *  **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
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
    * @param string|null $category **参数解释**： 评论类型。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
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
    * @param string|null $type **参数解释**： 评论元数据类型。 **取值范围**： 固定为comment。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets top
    *  **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param bool|null $top **参数解释**： 是否显示在置顶区域。 **取值范围**： - true：显示。 - false： 不显示。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets topTime
    *  **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTopTime()
    {
        return $this->container['topTime'];
    }

    /**
    * Sets topTime
    *
    * @param string|null $topTime **参数解释**： 置顶时间的unix时间戳，单位：毫秒。当有多条置顶评论时，最后置顶的评论显示在最上层。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTopTime($topTime)
    {
        $this->container['topTime'] = $topTime;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 评论内容，表现形式为html标签。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets issueId
    *  **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId **参数解释**： 评论关联的工作项ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets topFlag
    *  **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getTopFlag()
    {
        return $this->container['topFlag'];
    }

    /**
    * Sets topFlag
    *
    * @param bool|null $topFlag **参数解释**： 当前评论是否被置顶。 **取值范围**： - true：置顶。 - false： 不置顶。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTopFlag($topFlag)
    {
        $this->container['topFlag'] = $topFlag;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy **参数解释**： 评论创建人ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
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
    * @param string|null $createdDate **参数解释**： 评论创建时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets creatorInfo
    *  creatorInfo
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getCreatorInfo()
    {
        return $this->container['creatorInfo'];
    }

    /**
    * Sets creatorInfo
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $creatorInfo creatorInfo
    *
    * @return $this
    */
    public function setCreatorInfo($creatorInfo)
    {
        $this->container['creatorInfo'] = $creatorInfo;
        return $this;
    }

    /**
    * Gets extendAttribute
    *  **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getExtendAttribute()
    {
        return $this->container['extendAttribute'];
    }

    /**
    * Sets extendAttribute
    *
    * @param string|null $extendAttribute **参数解释**： 评论的一些扩展属性，表现为json字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExtendAttribute($extendAttribute)
    {
        $this->container['extendAttribute'] = $extendAttribute;
        return $this;
    }

    /**
    * Gets extendAttributeObj
    *  extendAttributeObj
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CommentExtendAttribute|null
    */
    public function getExtendAttributeObj()
    {
        return $this->container['extendAttributeObj'];
    }

    /**
    * Sets extendAttributeObj
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CommentExtendAttribute|null $extendAttributeObj extendAttributeObj
    *
    * @return $this
    */
    public function setExtendAttributeObj($extendAttributeObj)
    {
        $this->container['extendAttributeObj'] = $extendAttributeObj;
        return $this;
    }

    /**
    * Gets extendAttributeObjs
    *  **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CommentExtendAttribute[]|null
    */
    public function getExtendAttributeObjs()
    {
        return $this->container['extendAttributeObjs'];
    }

    /**
    * Sets extendAttributeObjs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CommentExtendAttribute[]|null $extendAttributeObjs **参数解释**： 评论的扩展属性对象数组。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExtendAttributeObjs($extendAttributeObjs)
    {
        $this->container['extendAttributeObjs'] = $extendAttributeObjs;
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

