<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  云堡垒机实例名称。
    * serverId  云堡垒机服务器id。
    * instanceId  云堡垒机实例id。
    * alterPermit  云堡垒机实例是否可以扩容。 - true：是 - false：否
    * enterpriseProjectId  项目ID。
    * periodNum  云堡垒机实例订购周期数。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * createdTime  云堡垒机实例创建时间，使用UTC时间表示。
    * upgradeTime  云堡垒机实例升级定时时间，使用时间戳格式表示。
    * update  云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    * bastionVersion  云堡垒机实例当前版本。
    * azInfo  azInfo
    * statusInfo  statusInfo
    * resourceInfo  resourceInfo
    * network  network
    * haInfo  haInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'serverId' => 'string',
            'instanceId' => 'string',
            'alterPermit' => 'bool',
            'enterpriseProjectId' => 'string',
            'periodNum' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'createdTime' => 'string',
            'upgradeTime' => 'int',
            'update' => 'string',
            'bastionVersion' => 'string',
            'azInfo' => '\HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailAzInfo',
            'statusInfo' => '\HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailStatusInfo',
            'resourceInfo' => '\HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailResourceInfo',
            'network' => '\HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailNetwork',
            'haInfo' => '\HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailHaInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  云堡垒机实例名称。
    * serverId  云堡垒机服务器id。
    * instanceId  云堡垒机实例id。
    * alterPermit  云堡垒机实例是否可以扩容。 - true：是 - false：否
    * enterpriseProjectId  项目ID。
    * periodNum  云堡垒机实例订购周期数。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * createdTime  云堡垒机实例创建时间，使用UTC时间表示。
    * upgradeTime  云堡垒机实例升级定时时间，使用时间戳格式表示。
    * update  云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    * bastionVersion  云堡垒机实例当前版本。
    * azInfo  azInfo
    * statusInfo  statusInfo
    * resourceInfo  resourceInfo
    * network  network
    * haInfo  haInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'serverId' => null,
        'instanceId' => null,
        'alterPermit' => null,
        'enterpriseProjectId' => null,
        'periodNum' => null,
        'startTime' => null,
        'endTime' => null,
        'createdTime' => null,
        'upgradeTime' => 'int64',
        'update' => null,
        'bastionVersion' => null,
        'azInfo' => null,
        'statusInfo' => null,
        'resourceInfo' => null,
        'network' => null,
        'haInfo' => null
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
    * name  云堡垒机实例名称。
    * serverId  云堡垒机服务器id。
    * instanceId  云堡垒机实例id。
    * alterPermit  云堡垒机实例是否可以扩容。 - true：是 - false：否
    * enterpriseProjectId  项目ID。
    * periodNum  云堡垒机实例订购周期数。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * createdTime  云堡垒机实例创建时间，使用UTC时间表示。
    * upgradeTime  云堡垒机实例升级定时时间，使用时间戳格式表示。
    * update  云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    * bastionVersion  云堡垒机实例当前版本。
    * azInfo  azInfo
    * statusInfo  statusInfo
    * resourceInfo  resourceInfo
    * network  network
    * haInfo  haInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'serverId' => 'server_id',
            'instanceId' => 'instance_id',
            'alterPermit' => 'alter_permit',
            'enterpriseProjectId' => 'enterprise_project_id',
            'periodNum' => 'period_num',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'createdTime' => 'created_time',
            'upgradeTime' => 'upgrade_time',
            'update' => 'update',
            'bastionVersion' => 'bastion_version',
            'azInfo' => 'az_info',
            'statusInfo' => 'status_info',
            'resourceInfo' => 'resource_info',
            'network' => 'network',
            'haInfo' => 'ha_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  云堡垒机实例名称。
    * serverId  云堡垒机服务器id。
    * instanceId  云堡垒机实例id。
    * alterPermit  云堡垒机实例是否可以扩容。 - true：是 - false：否
    * enterpriseProjectId  项目ID。
    * periodNum  云堡垒机实例订购周期数。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * createdTime  云堡垒机实例创建时间，使用UTC时间表示。
    * upgradeTime  云堡垒机实例升级定时时间，使用时间戳格式表示。
    * update  云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    * bastionVersion  云堡垒机实例当前版本。
    * azInfo  azInfo
    * statusInfo  statusInfo
    * resourceInfo  resourceInfo
    * network  network
    * haInfo  haInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'serverId' => 'setServerId',
            'instanceId' => 'setInstanceId',
            'alterPermit' => 'setAlterPermit',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'periodNum' => 'setPeriodNum',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'createdTime' => 'setCreatedTime',
            'upgradeTime' => 'setUpgradeTime',
            'update' => 'setUpdate',
            'bastionVersion' => 'setBastionVersion',
            'azInfo' => 'setAzInfo',
            'statusInfo' => 'setStatusInfo',
            'resourceInfo' => 'setResourceInfo',
            'network' => 'setNetwork',
            'haInfo' => 'setHaInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  云堡垒机实例名称。
    * serverId  云堡垒机服务器id。
    * instanceId  云堡垒机实例id。
    * alterPermit  云堡垒机实例是否可以扩容。 - true：是 - false：否
    * enterpriseProjectId  项目ID。
    * periodNum  云堡垒机实例订购周期数。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * createdTime  云堡垒机实例创建时间，使用UTC时间表示。
    * upgradeTime  云堡垒机实例升级定时时间，使用时间戳格式表示。
    * update  云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    * bastionVersion  云堡垒机实例当前版本。
    * azInfo  azInfo
    * statusInfo  statusInfo
    * resourceInfo  resourceInfo
    * network  network
    * haInfo  haInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'serverId' => 'getServerId',
            'instanceId' => 'getInstanceId',
            'alterPermit' => 'getAlterPermit',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'periodNum' => 'getPeriodNum',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'createdTime' => 'getCreatedTime',
            'upgradeTime' => 'getUpgradeTime',
            'update' => 'getUpdate',
            'bastionVersion' => 'getBastionVersion',
            'azInfo' => 'getAzInfo',
            'statusInfo' => 'getStatusInfo',
            'resourceInfo' => 'getResourceInfo',
            'network' => 'getNetwork',
            'haInfo' => 'getHaInfo'
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
    const UPDATE_OLD = 'OLD';
    const UPDATE__NEW = 'NEW';
    const UPDATE_CROSS_OS = 'CROSS_OS';
    const UPDATE_ROLLBACK = 'ROLLBACK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpdateAllowableValues()
    {
        return [
            self::UPDATE_OLD,
            self::UPDATE__NEW,
            self::UPDATE_CROSS_OS,
            self::UPDATE_ROLLBACK,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['alterPermit'] = isset($data['alterPermit']) ? $data['alterPermit'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['upgradeTime'] = isset($data['upgradeTime']) ? $data['upgradeTime'] : null;
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['bastionVersion'] = isset($data['bastionVersion']) ? $data['bastionVersion'] : null;
        $this->container['azInfo'] = isset($data['azInfo']) ? $data['azInfo'] : null;
        $this->container['statusInfo'] = isset($data['statusInfo']) ? $data['statusInfo'] : null;
        $this->container['resourceInfo'] = isset($data['resourceInfo']) ? $data['resourceInfo'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['haInfo'] = isset($data['haInfo']) ? $data['haInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 65)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
            if ((mb_strlen($this->container['serverId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['alterPermit'] === null) {
            $invalidProperties[] = "'alterPermit' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if ((mb_strlen($this->container['periodNum']) > 36)) {
                $invalidProperties[] = "invalid value for 'periodNum', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['periodNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'periodNum', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
            if ((mb_strlen($this->container['createdTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['createdTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upgradeTime']) && ($this->container['upgradeTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'upgradeTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['upgradeTime']) && ($this->container['upgradeTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeTime', must be bigger than or equal to 0.";
            }
        if ($this->container['update'] === null) {
            $invalidProperties[] = "'update' can't be null";
        }
            $allowedValues = $this->getUpdateAllowableValues();
                if (!is_null($this->container['update']) && !in_array($this->container['update'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'update', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['update']) > 36)) {
                $invalidProperties[] = "invalid value for 'update', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['update']) < 0)) {
                $invalidProperties[] = "invalid value for 'update', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['bastionVersion'] === null) {
            $invalidProperties[] = "'bastionVersion' can't be null";
        }
            if ((mb_strlen($this->container['bastionVersion']) > 36)) {
                $invalidProperties[] = "invalid value for 'bastionVersion', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['bastionVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'bastionVersion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['azInfo'] === null) {
            $invalidProperties[] = "'azInfo' can't be null";
        }
        if ($this->container['statusInfo'] === null) {
            $invalidProperties[] = "'statusInfo' can't be null";
        }
        if ($this->container['resourceInfo'] === null) {
            $invalidProperties[] = "'resourceInfo' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
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
    * Gets name
    *  云堡垒机实例名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 云堡垒机实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets serverId
    *  云堡垒机服务器id。
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 云堡垒机服务器id。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets instanceId
    *  云堡垒机实例id。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 云堡垒机实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets alterPermit
    *  云堡垒机实例是否可以扩容。 - true：是 - false：否
    *
    * @return bool
    */
    public function getAlterPermit()
    {
        return $this->container['alterPermit'];
    }

    /**
    * Sets alterPermit
    *
    * @param bool $alterPermit 云堡垒机实例是否可以扩容。 - true：是 - false：否
    *
    * @return $this
    */
    public function setAlterPermit($alterPermit)
    {
        $this->container['alterPermit'] = $alterPermit;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets periodNum
    *  云堡垒机实例订购周期数。
    *
    * @return string
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param string $periodNum 云堡垒机实例订购周期数。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets startTime
    *  云堡垒机实例开始时间，使用时间戳格式表示。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 云堡垒机实例开始时间，使用时间戳格式表示。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  云堡垒机实例结束时间，使用时间戳格式表示。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 云堡垒机实例结束时间，使用时间戳格式表示。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets createdTime
    *  云堡垒机实例创建时间，使用UTC时间表示。
    *
    * @return string
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string $createdTime 云堡垒机实例创建时间，使用UTC时间表示。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets upgradeTime
    *  云堡垒机实例升级定时时间，使用时间戳格式表示。
    *
    * @return int|null
    */
    public function getUpgradeTime()
    {
        return $this->container['upgradeTime'];
    }

    /**
    * Sets upgradeTime
    *
    * @param int|null $upgradeTime 云堡垒机实例升级定时时间，使用时间戳格式表示。
    *
    * @return $this
    */
    public function setUpgradeTime($upgradeTime)
    {
        $this->container['upgradeTime'] = $upgradeTime;
        return $this;
    }

    /**
    * Gets update
    *  云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    *
    * @return string
    */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
    * Sets update
    *
    * @param string $update 云堡垒机实例是否可以升级。 - OLD：当前已是最新版本 - NEW：可以升级小版本 - CROSS_OS：可以跨版本升级 - ROLLBACK：可以回滚
    *
    * @return $this
    */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;
        return $this;
    }

    /**
    * Gets bastionVersion
    *  云堡垒机实例当前版本。
    *
    * @return string
    */
    public function getBastionVersion()
    {
        return $this->container['bastionVersion'];
    }

    /**
    * Sets bastionVersion
    *
    * @param string $bastionVersion 云堡垒机实例当前版本。
    *
    * @return $this
    */
    public function setBastionVersion($bastionVersion)
    {
        $this->container['bastionVersion'] = $bastionVersion;
        return $this;
    }

    /**
    * Gets azInfo
    *  azInfo
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailAzInfo
    */
    public function getAzInfo()
    {
        return $this->container['azInfo'];
    }

    /**
    * Sets azInfo
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailAzInfo $azInfo azInfo
    *
    * @return $this
    */
    public function setAzInfo($azInfo)
    {
        $this->container['azInfo'] = $azInfo;
        return $this;
    }

    /**
    * Gets statusInfo
    *  statusInfo
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailStatusInfo
    */
    public function getStatusInfo()
    {
        return $this->container['statusInfo'];
    }

    /**
    * Sets statusInfo
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailStatusInfo $statusInfo statusInfo
    *
    * @return $this
    */
    public function setStatusInfo($statusInfo)
    {
        $this->container['statusInfo'] = $statusInfo;
        return $this;
    }

    /**
    * Gets resourceInfo
    *  resourceInfo
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailResourceInfo
    */
    public function getResourceInfo()
    {
        return $this->container['resourceInfo'];
    }

    /**
    * Sets resourceInfo
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailResourceInfo $resourceInfo resourceInfo
    *
    * @return $this
    */
    public function setResourceInfo($resourceInfo)
    {
        $this->container['resourceInfo'] = $resourceInfo;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailNetwork
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailNetwork $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets haInfo
    *  haInfo
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailHaInfo|null
    */
    public function getHaInfo()
    {
        return $this->container['haInfo'];
    }

    /**
    * Sets haInfo
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\InstanceDetailHaInfo|null $haInfo haInfo
    *
    * @return $this
    */
    public function setHaInfo($haInfo)
    {
        $this->container['haInfo'] = $haInfo;
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

