<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accounts  纳管账号列表(非跨账号场景不传递)
    * action  操作
    * alert  自动转告警的开关
    * allAccounts  是否接入已纳管的全量账号
    * csvc  云产品
    * csvcDisplay  云服务描述
    * enable  启用状态：0未启用；1启用
    * newAccountAutoAccess  新账号自动同步的开关
    * shards  所需分区数
    * sourceDisplay  数据源描述
    * sourceId  数据源ID
    * sourceName  日志名称
    * ttl  数据生命周期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accounts' => 'string[]',
            'action' => 'string',
            'alert' => 'bool',
            'allAccounts' => 'bool',
            'csvc' => 'string',
            'csvcDisplay' => 'string',
            'enable' => 'int',
            'newAccountAutoAccess' => 'bool',
            'shards' => 'int',
            'sourceDisplay' => 'string',
            'sourceId' => 'int',
            'sourceName' => 'string',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accounts  纳管账号列表(非跨账号场景不传递)
    * action  操作
    * alert  自动转告警的开关
    * allAccounts  是否接入已纳管的全量账号
    * csvc  云产品
    * csvcDisplay  云服务描述
    * enable  启用状态：0未启用；1启用
    * newAccountAutoAccess  新账号自动同步的开关
    * shards  所需分区数
    * sourceDisplay  数据源描述
    * sourceId  数据源ID
    * sourceName  日志名称
    * ttl  数据生命周期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accounts' => null,
        'action' => null,
        'alert' => null,
        'allAccounts' => null,
        'csvc' => null,
        'csvcDisplay' => null,
        'enable' => 'int64',
        'newAccountAutoAccess' => null,
        'shards' => 'int64',
        'sourceDisplay' => null,
        'sourceId' => 'int64',
        'sourceName' => null,
        'ttl' => 'int64'
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
    * accounts  纳管账号列表(非跨账号场景不传递)
    * action  操作
    * alert  自动转告警的开关
    * allAccounts  是否接入已纳管的全量账号
    * csvc  云产品
    * csvcDisplay  云服务描述
    * enable  启用状态：0未启用；1启用
    * newAccountAutoAccess  新账号自动同步的开关
    * shards  所需分区数
    * sourceDisplay  数据源描述
    * sourceId  数据源ID
    * sourceName  日志名称
    * ttl  数据生命周期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accounts' => 'accounts',
            'action' => 'action',
            'alert' => 'alert',
            'allAccounts' => 'all_accounts',
            'csvc' => 'csvc',
            'csvcDisplay' => 'csvc_display',
            'enable' => 'enable',
            'newAccountAutoAccess' => 'new_account_auto_access',
            'shards' => 'shards',
            'sourceDisplay' => 'source_display',
            'sourceId' => 'source_id',
            'sourceName' => 'source_name',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accounts  纳管账号列表(非跨账号场景不传递)
    * action  操作
    * alert  自动转告警的开关
    * allAccounts  是否接入已纳管的全量账号
    * csvc  云产品
    * csvcDisplay  云服务描述
    * enable  启用状态：0未启用；1启用
    * newAccountAutoAccess  新账号自动同步的开关
    * shards  所需分区数
    * sourceDisplay  数据源描述
    * sourceId  数据源ID
    * sourceName  日志名称
    * ttl  数据生命周期
    *
    * @var string[]
    */
    protected static $setters = [
            'accounts' => 'setAccounts',
            'action' => 'setAction',
            'alert' => 'setAlert',
            'allAccounts' => 'setAllAccounts',
            'csvc' => 'setCsvc',
            'csvcDisplay' => 'setCsvcDisplay',
            'enable' => 'setEnable',
            'newAccountAutoAccess' => 'setNewAccountAutoAccess',
            'shards' => 'setShards',
            'sourceDisplay' => 'setSourceDisplay',
            'sourceId' => 'setSourceId',
            'sourceName' => 'setSourceName',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accounts  纳管账号列表(非跨账号场景不传递)
    * action  操作
    * alert  自动转告警的开关
    * allAccounts  是否接入已纳管的全量账号
    * csvc  云产品
    * csvcDisplay  云服务描述
    * enable  启用状态：0未启用；1启用
    * newAccountAutoAccess  新账号自动同步的开关
    * shards  所需分区数
    * sourceDisplay  数据源描述
    * sourceId  数据源ID
    * sourceName  日志名称
    * ttl  数据生命周期
    *
    * @var string[]
    */
    protected static $getters = [
            'accounts' => 'getAccounts',
            'action' => 'getAction',
            'alert' => 'getAlert',
            'allAccounts' => 'getAllAccounts',
            'csvc' => 'getCsvc',
            'csvcDisplay' => 'getCsvcDisplay',
            'enable' => 'getEnable',
            'newAccountAutoAccess' => 'getNewAccountAutoAccess',
            'shards' => 'getShards',
            'sourceDisplay' => 'getSourceDisplay',
            'sourceId' => 'getSourceId',
            'sourceName' => 'getSourceName',
            'ttl' => 'getTtl'
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
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['allAccounts'] = isset($data['allAccounts']) ? $data['allAccounts'] : null;
        $this->container['csvc'] = isset($data['csvc']) ? $data['csvc'] : null;
        $this->container['csvcDisplay'] = isset($data['csvcDisplay']) ? $data['csvcDisplay'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['newAccountAutoAccess'] = isset($data['newAccountAutoAccess']) ? $data['newAccountAutoAccess'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['sourceDisplay'] = isset($data['sourceDisplay']) ? $data['sourceDisplay'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 255)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) > 255)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) < 1)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['csvcDisplay'] === null) {
            $invalidProperties[] = "'csvcDisplay' can't be null";
        }
            if ((mb_strlen($this->container['csvcDisplay']) > 255)) {
                $invalidProperties[] = "invalid value for 'csvcDisplay', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['csvcDisplay']) < 1)) {
                $invalidProperties[] = "invalid value for 'csvcDisplay', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
            if (($this->container['enable'] > 10)) {
                $invalidProperties[] = "invalid value for 'enable', must be smaller than or equal to 10.";
            }
            if (($this->container['enable'] < 0)) {
                $invalidProperties[] = "invalid value for 'enable', must be bigger than or equal to 0.";
            }
        if ($this->container['shards'] === null) {
            $invalidProperties[] = "'shards' can't be null";
        }
            if (($this->container['shards'] > 99)) {
                $invalidProperties[] = "invalid value for 'shards', must be smaller than or equal to 99.";
            }
            if (($this->container['shards'] < 0)) {
                $invalidProperties[] = "invalid value for 'shards', must be bigger than or equal to 0.";
            }
        if ($this->container['sourceDisplay'] === null) {
            $invalidProperties[] = "'sourceDisplay' can't be null";
        }
            if ((mb_strlen($this->container['sourceDisplay']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceDisplay', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['sourceDisplay']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceDisplay', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
            if (($this->container['sourceId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['sourceId'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceName']) && (mb_strlen($this->container['sourceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceName']) && (mb_strlen($this->container['sourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
            if (($this->container['ttl'] > 180)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 180.";
            }
            if (($this->container['ttl'] < 7)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 7.";
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
    * Gets accounts
    *  纳管账号列表(非跨账号场景不传递)
    *
    * @return string[]|null
    */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
    * Sets accounts
    *
    * @param string[]|null $accounts 纳管账号列表(非跨账号场景不传递)
    *
    * @return $this
    */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;
        return $this;
    }

    /**
    * Gets action
    *  操作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 操作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets alert
    *  自动转告警的开关
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
    * @param bool|null $alert 自动转告警的开关
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
    * Gets csvc
    *  云产品
    *
    * @return string|null
    */
    public function getCsvc()
    {
        return $this->container['csvc'];
    }

    /**
    * Sets csvc
    *
    * @param string|null $csvc 云产品
    *
    * @return $this
    */
    public function setCsvc($csvc)
    {
        $this->container['csvc'] = $csvc;
        return $this;
    }

    /**
    * Gets csvcDisplay
    *  云服务描述
    *
    * @return string
    */
    public function getCsvcDisplay()
    {
        return $this->container['csvcDisplay'];
    }

    /**
    * Sets csvcDisplay
    *
    * @param string $csvcDisplay 云服务描述
    *
    * @return $this
    */
    public function setCsvcDisplay($csvcDisplay)
    {
        $this->container['csvcDisplay'] = $csvcDisplay;
        return $this;
    }

    /**
    * Gets enable
    *  启用状态：0未启用；1启用
    *
    * @return int
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param int $enable 启用状态：0未启用；1启用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets newAccountAutoAccess
    *  新账号自动同步的开关
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
    * @param bool|null $newAccountAutoAccess 新账号自动同步的开关
    *
    * @return $this
    */
    public function setNewAccountAutoAccess($newAccountAutoAccess)
    {
        $this->container['newAccountAutoAccess'] = $newAccountAutoAccess;
        return $this;
    }

    /**
    * Gets shards
    *  所需分区数
    *
    * @return int
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param int $shards 所需分区数
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets sourceDisplay
    *  数据源描述
    *
    * @return string
    */
    public function getSourceDisplay()
    {
        return $this->container['sourceDisplay'];
    }

    /**
    * Sets sourceDisplay
    *
    * @param string $sourceDisplay 数据源描述
    *
    * @return $this
    */
    public function setSourceDisplay($sourceDisplay)
    {
        $this->container['sourceDisplay'] = $sourceDisplay;
        return $this;
    }

    /**
    * Gets sourceId
    *  数据源ID
    *
    * @return int
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param int $sourceId 数据源ID
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
    * Gets ttl
    *  数据生命周期
    *
    * @return int
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int $ttl 数据生命周期
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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

