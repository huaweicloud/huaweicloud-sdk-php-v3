<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyDatasets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_datasets';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * accounts  账号列表
    * alert  自动转告警开关
    * allAccounts  是否接入已纳管的全量账号
    * allowAlert  能否开自动转告警
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * enable  开启状态
    * lastActiveTime  上次活跃时间
    * limit  限制
    * newAccountAutoAccess  新账号自动接入开关
    * processStatus  日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    * reference  reference
    * regionId  所属区域
    * sinkMsg  错误信息
    * sourceId  日志ID
    * sourceName  日志名称
    * target  target
    * type  类型
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountAllNum' => 'float',
            'accountSuccessfulNum' => 'float',
            'accounts' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyAccounts[]',
            'alert' => 'bool',
            'allAccounts' => 'bool',
            'allowAlert' => 'bool',
            'dataspaceId' => 'string',
            'dataspaceName' => 'string',
            'enable' => 'string',
            'lastActiveTime' => 'float',
            'limit' => 'string',
            'newAccountAutoAccess' => 'bool',
            'processStatus' => 'string',
            'reference' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyReference',
            'regionId' => 'string',
            'sinkMsg' => 'string',
            'sourceId' => 'float',
            'sourceName' => 'string',
            'target' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyTarget',
            'type' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * accounts  账号列表
    * alert  自动转告警开关
    * allAccounts  是否接入已纳管的全量账号
    * allowAlert  能否开自动转告警
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * enable  开启状态
    * lastActiveTime  上次活跃时间
    * limit  限制
    * newAccountAutoAccess  新账号自动接入开关
    * processStatus  日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    * reference  reference
    * regionId  所属区域
    * sinkMsg  错误信息
    * sourceId  日志ID
    * sourceName  日志名称
    * target  target
    * type  类型
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountAllNum' => null,
        'accountSuccessfulNum' => null,
        'accounts' => null,
        'alert' => null,
        'allAccounts' => null,
        'allowAlert' => null,
        'dataspaceId' => null,
        'dataspaceName' => null,
        'enable' => null,
        'lastActiveTime' => null,
        'limit' => null,
        'newAccountAutoAccess' => null,
        'processStatus' => null,
        'reference' => null,
        'regionId' => null,
        'sinkMsg' => null,
        'sourceId' => null,
        'sourceName' => null,
        'target' => null,
        'type' => null,
        'workspaceId' => null
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
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * accounts  账号列表
    * alert  自动转告警开关
    * allAccounts  是否接入已纳管的全量账号
    * allowAlert  能否开自动转告警
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * enable  开启状态
    * lastActiveTime  上次活跃时间
    * limit  限制
    * newAccountAutoAccess  新账号自动接入开关
    * processStatus  日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    * reference  reference
    * regionId  所属区域
    * sinkMsg  错误信息
    * sourceId  日志ID
    * sourceName  日志名称
    * target  target
    * type  类型
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountAllNum' => 'account_all_num',
            'accountSuccessfulNum' => 'account_successful_num',
            'accounts' => 'accounts',
            'alert' => 'alert',
            'allAccounts' => 'all_accounts',
            'allowAlert' => 'allow_alert',
            'dataspaceId' => 'dataspace_id',
            'dataspaceName' => 'dataspace_name',
            'enable' => 'enable',
            'lastActiveTime' => 'last_active_time',
            'limit' => 'limit',
            'newAccountAutoAccess' => 'new_account_auto_access',
            'processStatus' => 'process_status',
            'reference' => 'reference',
            'regionId' => 'region_id',
            'sinkMsg' => 'sink_msg',
            'sourceId' => 'source_id',
            'sourceName' => 'source_name',
            'target' => 'target',
            'type' => 'type',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * accounts  账号列表
    * alert  自动转告警开关
    * allAccounts  是否接入已纳管的全量账号
    * allowAlert  能否开自动转告警
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * enable  开启状态
    * lastActiveTime  上次活跃时间
    * limit  限制
    * newAccountAutoAccess  新账号自动接入开关
    * processStatus  日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    * reference  reference
    * regionId  所属区域
    * sinkMsg  错误信息
    * sourceId  日志ID
    * sourceName  日志名称
    * target  target
    * type  类型
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'accountAllNum' => 'setAccountAllNum',
            'accountSuccessfulNum' => 'setAccountSuccessfulNum',
            'accounts' => 'setAccounts',
            'alert' => 'setAlert',
            'allAccounts' => 'setAllAccounts',
            'allowAlert' => 'setAllowAlert',
            'dataspaceId' => 'setDataspaceId',
            'dataspaceName' => 'setDataspaceName',
            'enable' => 'setEnable',
            'lastActiveTime' => 'setLastActiveTime',
            'limit' => 'setLimit',
            'newAccountAutoAccess' => 'setNewAccountAutoAccess',
            'processStatus' => 'setProcessStatus',
            'reference' => 'setReference',
            'regionId' => 'setRegionId',
            'sinkMsg' => 'setSinkMsg',
            'sourceId' => 'setSourceId',
            'sourceName' => 'setSourceName',
            'target' => 'setTarget',
            'type' => 'setType',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * accounts  账号列表
    * alert  自动转告警开关
    * allAccounts  是否接入已纳管的全量账号
    * allowAlert  能否开自动转告警
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * enable  开启状态
    * lastActiveTime  上次活跃时间
    * limit  限制
    * newAccountAutoAccess  新账号自动接入开关
    * processStatus  日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    * reference  reference
    * regionId  所属区域
    * sinkMsg  错误信息
    * sourceId  日志ID
    * sourceName  日志名称
    * target  target
    * type  类型
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'accountAllNum' => 'getAccountAllNum',
            'accountSuccessfulNum' => 'getAccountSuccessfulNum',
            'accounts' => 'getAccounts',
            'alert' => 'getAlert',
            'allAccounts' => 'getAllAccounts',
            'allowAlert' => 'getAllowAlert',
            'dataspaceId' => 'getDataspaceId',
            'dataspaceName' => 'getDataspaceName',
            'enable' => 'getEnable',
            'lastActiveTime' => 'getLastActiveTime',
            'limit' => 'getLimit',
            'newAccountAutoAccess' => 'getNewAccountAutoAccess',
            'processStatus' => 'getProcessStatus',
            'reference' => 'getReference',
            'regionId' => 'getRegionId',
            'sinkMsg' => 'getSinkMsg',
            'sourceId' => 'getSourceId',
            'sourceName' => 'getSourceName',
            'target' => 'getTarget',
            'type' => 'getType',
            'workspaceId' => 'getWorkspaceId'
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
    const PROCESS_STATUS_FAIL = 'FAIL';
    const PROCESS_STATUS__DEFAULT = 'DEFAULT';
    const PROCESS_STATUS_CREATING = 'CREATING';
    const PROCESS_STATUS_SUCCESS = 'SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProcessStatusAllowableValues()
    {
        return [
            self::PROCESS_STATUS_FAIL,
            self::PROCESS_STATUS__DEFAULT,
            self::PROCESS_STATUS_CREATING,
            self::PROCESS_STATUS_SUCCESS,
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
        $this->container['accountAllNum'] = isset($data['accountAllNum']) ? $data['accountAllNum'] : null;
        $this->container['accountSuccessfulNum'] = isset($data['accountSuccessfulNum']) ? $data['accountSuccessfulNum'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['allAccounts'] = isset($data['allAccounts']) ? $data['allAccounts'] : null;
        $this->container['allowAlert'] = isset($data['allowAlert']) ? $data['allowAlert'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['dataspaceName'] = isset($data['dataspaceName']) ? $data['dataspaceName'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['lastActiveTime'] = isset($data['lastActiveTime']) ? $data['lastActiveTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['newAccountAutoAccess'] = isset($data['newAccountAutoAccess']) ? $data['newAccountAutoAccess'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['sinkMsg'] = isset($data['sinkMsg']) ? $data['sinkMsg'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountAllNum']) && ($this->container['accountAllNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'accountAllNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['accountAllNum']) && ($this->container['accountAllNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accountAllNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accountSuccessfulNum']) && ($this->container['accountSuccessfulNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'accountSuccessfulNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['accountSuccessfulNum']) && ($this->container['accountSuccessfulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accountSuccessfulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enable']) && (mb_strlen($this->container['enable']) > 64)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enable']) && (mb_strlen($this->container['enable']) < 0)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastActiveTime']) && ($this->container['lastActiveTime'] > 4.9E+12)) {
                $invalidProperties[] = "invalid value for 'lastActiveTime', must be smaller than or equal to 4.9E+12.";
            }
            if (!is_null($this->container['lastActiveTime']) && ($this->container['lastActiveTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastActiveTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 64)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 0)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProcessStatusAllowableValues();
                if (!is_null($this->container['processStatus']) && !in_array($this->container['processStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'processStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sinkMsg']) && (mb_strlen($this->container['sinkMsg']) > 64)) {
                $invalidProperties[] = "invalid value for 'sinkMsg', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sinkMsg']) && (mb_strlen($this->container['sinkMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'sinkMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceName']) && (mb_strlen($this->container['sourceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceName']) && (mb_strlen($this->container['sourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
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
    * Gets accountAllNum
    *  接入账号总数量
    *
    * @return float|null
    */
    public function getAccountAllNum()
    {
        return $this->container['accountAllNum'];
    }

    /**
    * Sets accountAllNum
    *
    * @param float|null $accountAllNum 接入账号总数量
    *
    * @return $this
    */
    public function setAccountAllNum($accountAllNum)
    {
        $this->container['accountAllNum'] = $accountAllNum;
        return $this;
    }

    /**
    * Gets accountSuccessfulNum
    *  成功接入账号数量
    *
    * @return float|null
    */
    public function getAccountSuccessfulNum()
    {
        return $this->container['accountSuccessfulNum'];
    }

    /**
    * Sets accountSuccessfulNum
    *
    * @param float|null $accountSuccessfulNum 成功接入账号数量
    *
    * @return $this
    */
    public function setAccountSuccessfulNum($accountSuccessfulNum)
    {
        $this->container['accountSuccessfulNum'] = $accountSuccessfulNum;
        return $this;
    }

    /**
    * Gets accounts
    *  账号列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyAccounts[]|null
    */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
    * Sets accounts
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyAccounts[]|null $accounts 账号列表
    *
    * @return $this
    */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;
        return $this;
    }

    /**
    * Gets alert
    *  自动转告警开关
    *
    * @return bool|null
    */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
    * Sets alert
    *
    * @param bool|null $alert 自动转告警开关
    *
    * @return $this
    */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;
        return $this;
    }

    /**
    * Gets allAccounts
    *  是否接入已纳管的全量账号
    *
    * @return bool|null
    */
    public function getAllAccounts()
    {
        return $this->container['allAccounts'];
    }

    /**
    * Sets allAccounts
    *
    * @param bool|null $allAccounts 是否接入已纳管的全量账号
    *
    * @return $this
    */
    public function setAllAccounts($allAccounts)
    {
        $this->container['allAccounts'] = $allAccounts;
        return $this;
    }

    /**
    * Gets allowAlert
    *  能否开自动转告警
    *
    * @return bool|null
    */
    public function getAllowAlert()
    {
        return $this->container['allowAlert'];
    }

    /**
    * Sets allowAlert
    *
    * @param bool|null $allowAlert 能否开自动转告警
    *
    * @return $this
    */
    public function setAllowAlert($allowAlert)
    {
        $this->container['allowAlert'] = $allowAlert;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets dataspaceName
    *  数据空间名称
    *
    * @return string|null
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string|null $dataspaceName 数据空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
        return $this;
    }

    /**
    * Gets enable
    *  开启状态
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 开启状态
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets lastActiveTime
    *  上次活跃时间
    *
    * @return float|null
    */
    public function getLastActiveTime()
    {
        return $this->container['lastActiveTime'];
    }

    /**
    * Sets lastActiveTime
    *
    * @param float|null $lastActiveTime 上次活跃时间
    *
    * @return $this
    */
    public function setLastActiveTime($lastActiveTime)
    {
        $this->container['lastActiveTime'] = $lastActiveTime;
        return $this;
    }

    /**
    * Gets limit
    *  限制
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets newAccountAutoAccess
    *  新账号自动接入开关
    *
    * @return bool|null
    */
    public function getNewAccountAutoAccess()
    {
        return $this->container['newAccountAutoAccess'];
    }

    /**
    * Sets newAccountAutoAccess
    *
    * @param bool|null $newAccountAutoAccess 新账号自动接入开关
    *
    * @return $this
    */
    public function setNewAccountAutoAccess($newAccountAutoAccess)
    {
        $this->container['newAccountAutoAccess'] = $newAccountAutoAccess;
        return $this;
    }

    /**
    * Gets processStatus
    *  日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    *
    * @return string|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string|null $processStatus 日志的接入状态,可能的值为FAIL,DEFAULT,CREATING,SUCCESS,FAIL表示失败,DEFAULT表示待接入,CREATING表示接入中,SUCCESS表示成功
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets reference
    *  reference
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyReference|null
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyReference|null $reference reference
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
        return $this;
    }

    /**
    * Gets regionId
    *  所属区域
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 所属区域
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets sinkMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getSinkMsg()
    {
        return $this->container['sinkMsg'];
    }

    /**
    * Sets sinkMsg
    *
    * @param string|null $sinkMsg 错误信息
    *
    * @return $this
    */
    public function setSinkMsg($sinkMsg)
    {
        $this->container['sinkMsg'] = $sinkMsg;
        return $this;
    }

    /**
    * Gets sourceId
    *  日志ID
    *
    * @return float|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param float|null $sourceId 日志ID
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceName
    *  日志名称
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 日志名称
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets target
    *  target
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyTarget|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyTarget|null $target target
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets type
    *  类型
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
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

