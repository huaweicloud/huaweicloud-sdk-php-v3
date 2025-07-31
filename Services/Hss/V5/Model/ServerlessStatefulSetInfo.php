<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerlessStatefulSetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerlessStatefulSetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  有状态工作负载名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    * agentInstalledNum  工作负载下已安装agent实例数
    * agentInstallFailedNum  工作负载下安装失败实例数
    * agentNotInstallNum  工作负载下未安装agent实例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespaceName' => 'string',
            'clusterName' => 'string',
            'status' => 'string',
            'protectStatus' => 'string',
            'podsNum' => 'int',
            'imageName' => 'string',
            'matchLabels' => '\HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]',
            'createTime' => 'int',
            'agentInstalledNum' => 'int',
            'agentInstallFailedNum' => 'int',
            'agentNotInstallNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  有状态工作负载名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    * agentInstalledNum  工作负载下已安装agent实例数
    * agentInstallFailedNum  工作负载下安装失败实例数
    * agentNotInstallNum  工作负载下未安装agent实例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespaceName' => null,
        'clusterName' => null,
        'status' => null,
        'protectStatus' => null,
        'podsNum' => 'int32',
        'imageName' => null,
        'matchLabels' => null,
        'createTime' => 'int64',
        'agentInstalledNum' => 'int32',
        'agentInstallFailedNum' => 'int32',
        'agentNotInstallNum' => 'int32'
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
    * name  有状态工作负载名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    * agentInstalledNum  工作负载下已安装agent实例数
    * agentInstallFailedNum  工作负载下安装失败实例数
    * agentNotInstallNum  工作负载下未安装agent实例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespaceName' => 'namespace_name',
            'clusterName' => 'cluster_name',
            'status' => 'status',
            'protectStatus' => 'protect_status',
            'podsNum' => 'pods_num',
            'imageName' => 'image_name',
            'matchLabels' => 'match_labels',
            'createTime' => 'create_time',
            'agentInstalledNum' => 'agent_installed_num',
            'agentInstallFailedNum' => 'agent_install_failed_num',
            'agentNotInstallNum' => 'agent_not_install_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  有状态工作负载名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    * agentInstalledNum  工作负载下已安装agent实例数
    * agentInstallFailedNum  工作负载下安装失败实例数
    * agentNotInstallNum  工作负载下未安装agent实例数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespaceName' => 'setNamespaceName',
            'clusterName' => 'setClusterName',
            'status' => 'setStatus',
            'protectStatus' => 'setProtectStatus',
            'podsNum' => 'setPodsNum',
            'imageName' => 'setImageName',
            'matchLabels' => 'setMatchLabels',
            'createTime' => 'setCreateTime',
            'agentInstalledNum' => 'setAgentInstalledNum',
            'agentInstallFailedNum' => 'setAgentInstallFailedNum',
            'agentNotInstallNum' => 'setAgentNotInstallNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  有状态工作负载名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    * agentInstalledNum  工作负载下已安装agent实例数
    * agentInstallFailedNum  工作负载下安装失败实例数
    * agentNotInstallNum  工作负载下未安装agent实例数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespaceName' => 'getNamespaceName',
            'clusterName' => 'getClusterName',
            'status' => 'getStatus',
            'protectStatus' => 'getProtectStatus',
            'podsNum' => 'getPodsNum',
            'imageName' => 'getImageName',
            'matchLabels' => 'getMatchLabels',
            'createTime' => 'getCreateTime',
            'agentInstalledNum' => 'getAgentInstalledNum',
            'agentInstallFailedNum' => 'getAgentInstallFailedNum',
            'agentNotInstallNum' => 'getAgentNotInstallNum'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['podsNum'] = isset($data['podsNum']) ? $data['podsNum'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['matchLabels'] = isset($data['matchLabels']) ? $data['matchLabels'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['agentInstalledNum'] = isset($data['agentInstalledNum']) ? $data['agentInstalledNum'] : null;
        $this->container['agentInstallFailedNum'] = isset($data['agentInstallFailedNum']) ? $data['agentInstallFailedNum'] : null;
        $this->container['agentNotInstallNum'] = isset($data['agentNotInstallNum']) ? $data['agentNotInstallNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 65535)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 65535)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podsNum']) && ($this->container['podsNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'podsNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['podsNum']) && ($this->container['podsNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'podsNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentInstalledNum']) && ($this->container['agentInstalledNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'agentInstalledNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['agentInstalledNum']) && ($this->container['agentInstalledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentInstalledNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentInstallFailedNum']) && ($this->container['agentInstallFailedNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'agentInstallFailedNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['agentInstallFailedNum']) && ($this->container['agentInstallFailedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentInstallFailedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentNotInstallNum']) && ($this->container['agentNotInstallNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'agentNotInstallNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['agentNotInstallNum']) && ($this->container['agentNotInstallNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentNotInstallNum', must be bigger than or equal to 0.";
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
    *  有状态工作负载名称
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
    * @param string|null $name 有状态工作负载名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名称
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets clusterName
    *  所属集群
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 所属集群
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets status
    *  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets podsNum
    *  实例个数
    *
    * @return int|null
    */
    public function getPodsNum()
    {
        return $this->container['podsNum'];
    }

    /**
    * Sets podsNum
    *
    * @param int|null $podsNum 实例个数
    *
    * @return $this
    */
    public function setPodsNum($podsNum)
    {
        $this->container['podsNum'] = $podsNum;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets matchLabels
    *  标签
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]|null
    */
    public function getMatchLabels()
    {
        return $this->container['matchLabels'];
    }

    /**
    * Sets matchLabels
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]|null $matchLabels 标签
    *
    * @return $this
    */
    public function setMatchLabels($matchLabels)
    {
        $this->container['matchLabels'] = $matchLabels;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets agentInstalledNum
    *  工作负载下已安装agent实例数
    *
    * @return int|null
    */
    public function getAgentInstalledNum()
    {
        return $this->container['agentInstalledNum'];
    }

    /**
    * Sets agentInstalledNum
    *
    * @param int|null $agentInstalledNum 工作负载下已安装agent实例数
    *
    * @return $this
    */
    public function setAgentInstalledNum($agentInstalledNum)
    {
        $this->container['agentInstalledNum'] = $agentInstalledNum;
        return $this;
    }

    /**
    * Gets agentInstallFailedNum
    *  工作负载下安装失败实例数
    *
    * @return int|null
    */
    public function getAgentInstallFailedNum()
    {
        return $this->container['agentInstallFailedNum'];
    }

    /**
    * Sets agentInstallFailedNum
    *
    * @param int|null $agentInstallFailedNum 工作负载下安装失败实例数
    *
    * @return $this
    */
    public function setAgentInstallFailedNum($agentInstallFailedNum)
    {
        $this->container['agentInstallFailedNum'] = $agentInstallFailedNum;
        return $this;
    }

    /**
    * Gets agentNotInstallNum
    *  工作负载下未安装agent实例数
    *
    * @return int|null
    */
    public function getAgentNotInstallNum()
    {
        return $this->container['agentNotInstallNum'];
    }

    /**
    * Sets agentNotInstallNum
    *
    * @param int|null $agentNotInstallNum 工作负载下未安装agent实例数
    *
    * @return $this
    */
    public function setAgentNotInstallNum($agentNotInstallNum)
    {
        $this->container['agentNotInstallNum'] = $agentNotInstallNum;
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

