<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConditionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConditionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * nameEn  字段名
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * conditionFn  限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    * conditionFnParam  限定计算参数。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * baseTime  基准时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'createBy' => 'string',
            'conditionFn' => 'string',
            'conditionFnParam' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'baseTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * nameEn  字段名
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * conditionFn  限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    * conditionFnParam  限定计算参数。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * baseTime  基准时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'nameEn' => null,
        'nameCh' => null,
        'description' => null,
        'createBy' => null,
        'conditionFn' => null,
        'conditionFnParam' => null,
        'status' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'approvalInfo' => null,
        'newBiz' => null,
        'baseTime' => 'int32'
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
    * id  编码，ID字符串。
    * nameEn  字段名
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * conditionFn  限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    * conditionFnParam  限定计算参数。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * baseTime  基准时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'createBy' => 'create_by',
            'conditionFn' => 'condition_fn',
            'conditionFnParam' => 'condition_fn_param',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'baseTime' => 'base_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，ID字符串。
    * nameEn  字段名
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * conditionFn  限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    * conditionFnParam  限定计算参数。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * baseTime  基准时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'createBy' => 'setCreateBy',
            'conditionFn' => 'setConditionFn',
            'conditionFnParam' => 'setConditionFnParam',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'baseTime' => 'setBaseTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，ID字符串。
    * nameEn  字段名
    * nameCh  业务属性。
    * description  描述。
    * createBy  创建人。
    * conditionFn  限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    * conditionFnParam  限定计算参数。
    * status  status
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * baseTime  基准时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'createBy' => 'getCreateBy',
            'conditionFn' => 'getConditionFn',
            'conditionFnParam' => 'getConditionFnParam',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'baseTime' => 'getBaseTime'
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
    const CONDITION_FN_LAST_YEAR = 'LAST_YEAR';
    const CONDITION_FN_CURRENT_YEAR = 'CURRENT_YEAR';
    const CONDITION_FN_BETWEEN_YEAR = 'BETWEEN_YEAR';
    const CONDITION_FN_LAST_MONTH = 'LAST_MONTH';
    const CONDITION_FN_CURRENT_MONTH = 'CURRENT_MONTH';
    const CONDITION_FN_BETWEEN_MONTH = 'BETWEEN_MONTH';
    const CONDITION_FN_LAST_DAY = 'LAST_DAY';
    const CONDITION_FN_CURRENT_DAY = 'CURRENT_DAY';
    const CONDITION_FN_BETWEEN_DAY = 'BETWEEN_DAY';
    const CONDITION_FN_LAST_HOUR = 'LAST_HOUR';
    const CONDITION_FN_CURRENT_HOUR = 'CURRENT_HOUR';
    const CONDITION_FN_BETWEEN_HOUR = 'BETWEEN_HOUR';
    const CONDITION_FN_LAST_MINUTE = 'LAST_MINUTE';
    const CONDITION_FN_CURRENT_MINUTE = 'CURRENT_MINUTE';
    const CONDITION_FN_BETWEEN_MINUTE = 'BETWEEN_MINUTE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionFnAllowableValues()
    {
        return [
            self::CONDITION_FN_LAST_YEAR,
            self::CONDITION_FN_CURRENT_YEAR,
            self::CONDITION_FN_BETWEEN_YEAR,
            self::CONDITION_FN_LAST_MONTH,
            self::CONDITION_FN_CURRENT_MONTH,
            self::CONDITION_FN_BETWEEN_MONTH,
            self::CONDITION_FN_LAST_DAY,
            self::CONDITION_FN_CURRENT_DAY,
            self::CONDITION_FN_BETWEEN_DAY,
            self::CONDITION_FN_LAST_HOUR,
            self::CONDITION_FN_CURRENT_HOUR,
            self::CONDITION_FN_BETWEEN_HOUR,
            self::CONDITION_FN_LAST_MINUTE,
            self::CONDITION_FN_CURRENT_MINUTE,
            self::CONDITION_FN_BETWEEN_MINUTE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['conditionFn'] = isset($data['conditionFn']) ? $data['conditionFn'] : null;
        $this->container['conditionFnParam'] = isset($data['conditionFnParam']) ? $data['conditionFnParam'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['baseTime'] = isset($data['baseTime']) ? $data['baseTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 100)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^[a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z0-9_]*$/.";
            }
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 250)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 250.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\u4e00-\\u9fa5]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z0-9_\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getConditionFnAllowableValues();
                if (!is_null($this->container['conditionFn']) && !in_array($this->container['conditionFn'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conditionFn', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  编码，ID字符串。
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
    * @param string|null $id 编码，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nameEn
    *  字段名
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 字段名
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameCh
    *  业务属性。
    *
    * @return string
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string $nameCh 业务属性。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets conditionFn
    *  限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    *
    * @return string|null
    */
    public function getConditionFn()
    {
        return $this->container['conditionFn'];
    }

    /**
    * Sets conditionFn
    *
    * @param string|null $conditionFn 限定计算方法。 枚举值：   - LAST_YEAR: 前一年   - CURRENT_YEAR: 本年   - BETWEEN_YEAR: 自定义年区间   - LAST_MONTH: 前一月   - CURRENT_MONTH: 本月   - BETWEEN_MONTH: 自定义月区间   - LAST_DAY: 前一天   - CURRENT_DAY: 本日   - BETWEEN_DAY: 自定义日区间   - LAST_HOUR: 上一小时   - CURRENT_HOUR: 当前小时   - BETWEEN_HOUR: 自定义小时区间   - LAST_MINUTE: 上一分钟   - CURRENT_MINUTE: 当前分钟   - BETWEEN_MINUTE: 自定义分钟区间
    *
    * @return $this
    */
    public function setConditionFn($conditionFn)
    {
        $this->container['conditionFn'] = $conditionFn;
        return $this;
    }

    /**
    * Gets conditionFnParam
    *  限定计算参数。
    *
    * @return string|null
    */
    public function getConditionFnParam()
    {
        return $this->container['conditionFnParam'];
    }

    /**
    * Sets conditionFnParam
    *
    * @param string|null $conditionFnParam 限定计算参数。
    *
    * @return $this
    */
    public function setConditionFnParam($conditionFnParam)
    {
        $this->container['conditionFnParam'] = $conditionFnParam;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets approvalInfo
    *  approvalInfo
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null
    */
    public function getApprovalInfo()
    {
        return $this->container['approvalInfo'];
    }

    /**
    * Sets approvalInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null $approvalInfo approvalInfo
    *
    * @return $this
    */
    public function setApprovalInfo($approvalInfo)
    {
        $this->container['approvalInfo'] = $approvalInfo;
        return $this;
    }

    /**
    * Gets newBiz
    *  newBiz
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null
    */
    public function getNewBiz()
    {
        return $this->container['newBiz'];
    }

    /**
    * Sets newBiz
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null $newBiz newBiz
    *
    * @return $this
    */
    public function setNewBiz($newBiz)
    {
        $this->container['newBiz'] = $newBiz;
        return $this;
    }

    /**
    * Gets baseTime
    *  基准时间。
    *
    * @return int|null
    */
    public function getBaseTime()
    {
        return $this->container['baseTime'];
    }

    /**
    * Sets baseTime
    *
    * @param int|null $baseTime 基准时间。
    *
    * @return $this
    */
    public function setBaseTime($baseTime)
    {
        $this->container['baseTime'] = $baseTime;
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

