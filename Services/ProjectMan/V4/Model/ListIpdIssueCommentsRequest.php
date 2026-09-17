<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIpdIssueCommentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIpdIssueCommentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * dateDesc  **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    * pageNo  **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    * pageSize  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    * category  **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'issueId' => 'string',
            'dateDesc' => 'bool',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * dateDesc  **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    * pageNo  **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    * pageSize  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    * category  **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'issueId' => null,
        'dateDesc' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
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
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * dateDesc  **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    * pageNo  **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    * pageSize  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    * category  **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'issueId' => 'issue_id',
            'dateDesc' => 'date_desc',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * dateDesc  **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    * pageNo  **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    * pageSize  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    * category  **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'issueId' => 'setIssueId',
            'dateDesc' => 'setDateDesc',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * dateDesc  **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    * pageNo  **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    * pageSize  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    * category  **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'issueId' => 'getIssueId',
            'dateDesc' => 'getDateDesc',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
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
    const CATEGORY_COMMENT = 'comment';
    const CATEGORY_REPLY = 'reply';
    const CATEGORY_OPERATION = 'operation';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_COMMENT,
            self::CATEGORY_REPLY,
            self::CATEGORY_OPERATION,
        ];
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['dateDesc'] = isset($data['dateDesc']) ? $data['dateDesc'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['issueId'] === null) {
            $invalidProperties[] = "'issueId' can't be null";
        }
            if ((mb_strlen($this->container['issueId']) > 19)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['issueId']) < 18)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 18.";
            }
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
        }
            if (($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] > 200)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 200.";
            }
            if (($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 128)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
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
    * Gets projectId
    *  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    *
    * @return string
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string $issueId 工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets dateDesc
    *  **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getDateDesc()
    {
        return $this->container['dateDesc'];
    }

    /**
    * Sets dateDesc
    *
    * @param bool|null $dateDesc **参数解释**： 是否按创建日期倒序排列。 **取值范围**： - true：按创建时间倒序排列。 - false：按创建时间正序排列。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDateDesc($dateDesc)
    {
        $this->container['dateDesc'] = $dateDesc;
        return $this;
    }

    /**
    * Gets pageNo
    *  **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    *
    * @return int
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int $pageNo **参数解释**： 分页索引。 **约束限制**： 不涉及 **取值范围**： 最小值1，最大值10000 **默认取值**： 1
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： 最小值5，最大值200 **默认取值**： 200
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
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
    * @param string|null $category **参数解释**： 评论类型，支持多值，使用英文逗号分隔。 **取值范围**： - comment：评论 - reply：回复 - operation：系统操作。 **默认取值**： 不涉及。
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

