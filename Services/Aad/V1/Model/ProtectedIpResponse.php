<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectedIpResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectedIpResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  防护IP的Id
    * ip  防护IP
    * type  类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    * name  名字
    * status  状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    * statusDetail  statusDetail
    * policyName  策略名
    * region  所属region
    * packageId  防护包id
    * packageName  防护包名
    * tags  TMS标签
    * tag  本地标签
    * isResale  默认false，表示是否转售版的IP，不需要展示策略和报表
    * packageVersion  package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ip' => 'string',
            'type' => 'string',
            'name' => 'string',
            'status' => 'int',
            'statusDetail' => '\HuaweiCloud\SDK\Aad\V1\Model\IpStatusDetail',
            'policyName' => 'string',
            'region' => 'string',
            'packageId' => 'string',
            'packageName' => 'string',
            'tags' => 'string',
            'tag' => 'string',
            'isResale' => 'bool',
            'packageVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  防护IP的Id
    * ip  防护IP
    * type  类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    * name  名字
    * status  状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    * statusDetail  statusDetail
    * policyName  策略名
    * region  所属region
    * packageId  防护包id
    * packageName  防护包名
    * tags  TMS标签
    * tag  本地标签
    * isResale  默认false，表示是否转售版的IP，不需要展示策略和报表
    * packageVersion  package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ip' => null,
        'type' => null,
        'name' => null,
        'status' => null,
        'statusDetail' => null,
        'policyName' => null,
        'region' => null,
        'packageId' => null,
        'packageName' => null,
        'tags' => null,
        'tag' => null,
        'isResale' => null,
        'packageVersion' => null
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
    * id  防护IP的Id
    * ip  防护IP
    * type  类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    * name  名字
    * status  状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    * statusDetail  statusDetail
    * policyName  策略名
    * region  所属region
    * packageId  防护包id
    * packageName  防护包名
    * tags  TMS标签
    * tag  本地标签
    * isResale  默认false，表示是否转售版的IP，不需要展示策略和报表
    * packageVersion  package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ip' => 'ip',
            'type' => 'type',
            'name' => 'name',
            'status' => 'status',
            'statusDetail' => 'status_detail',
            'policyName' => 'policy_name',
            'region' => 'region',
            'packageId' => 'package_id',
            'packageName' => 'package_name',
            'tags' => 'tags',
            'tag' => 'tag',
            'isResale' => 'is_resale',
            'packageVersion' => 'package_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  防护IP的Id
    * ip  防护IP
    * type  类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    * name  名字
    * status  状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    * statusDetail  statusDetail
    * policyName  策略名
    * region  所属region
    * packageId  防护包id
    * packageName  防护包名
    * tags  TMS标签
    * tag  本地标签
    * isResale  默认false，表示是否转售版的IP，不需要展示策略和报表
    * packageVersion  package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ip' => 'setIp',
            'type' => 'setType',
            'name' => 'setName',
            'status' => 'setStatus',
            'statusDetail' => 'setStatusDetail',
            'policyName' => 'setPolicyName',
            'region' => 'setRegion',
            'packageId' => 'setPackageId',
            'packageName' => 'setPackageName',
            'tags' => 'setTags',
            'tag' => 'setTag',
            'isResale' => 'setIsResale',
            'packageVersion' => 'setPackageVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  防护IP的Id
    * ip  防护IP
    * type  类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    * name  名字
    * status  状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    * statusDetail  statusDetail
    * policyName  策略名
    * region  所属region
    * packageId  防护包id
    * packageName  防护包名
    * tags  TMS标签
    * tag  本地标签
    * isResale  默认false，表示是否转售版的IP，不需要展示策略和报表
    * packageVersion  package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ip' => 'getIp',
            'type' => 'getType',
            'name' => 'getName',
            'status' => 'getStatus',
            'statusDetail' => 'getStatusDetail',
            'policyName' => 'getPolicyName',
            'region' => 'getRegion',
            'packageId' => 'getPackageId',
            'packageName' => 'getPackageName',
            'tags' => 'getTags',
            'tag' => 'getTag',
            'isResale' => 'getIsResale',
            'packageVersion' => 'getPackageVersion'
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
    const TYPE_VPN = 'VPN';
    const TYPE_NAT = 'NAT';
    const TYPE_VIP = 'VIP';
    const TYPE_CCI = 'CCI';
    const TYPE_EIP = 'EIP';
    const TYPE_ELB = 'ELB';
    const TYPE_REROUTING_IP = 'REROUTING_IP';
    const TYPE_SUB_ENI = 'SubEni';
    const TYPE_NET_INTER_FACE = 'NetInterFace';
    const PACKAGE_VERSION_CNAD_PRO = 'cnad_pro';
    const PACKAGE_VERSION_CNAD_IP = 'cnad_ip';
    const PACKAGE_VERSION_CNAD_EP = 'cnad_ep';
    const PACKAGE_VERSION_CNAD_FULL_HIGH = 'cnad_full_high';
    const PACKAGE_VERSION_CNAD_VIC = 'cnad_vic';
    const PACKAGE_VERSION_CNAD_INTL_EP = 'cnad_intl_ep';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPN,
            self::TYPE_NAT,
            self::TYPE_VIP,
            self::TYPE_CCI,
            self::TYPE_EIP,
            self::TYPE_ELB,
            self::TYPE_REROUTING_IP,
            self::TYPE_SUB_ENI,
            self::TYPE_NET_INTER_FACE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPackageVersionAllowableValues()
    {
        return [
            self::PACKAGE_VERSION_CNAD_PRO,
            self::PACKAGE_VERSION_CNAD_IP,
            self::PACKAGE_VERSION_CNAD_EP,
            self::PACKAGE_VERSION_CNAD_FULL_HIGH,
            self::PACKAGE_VERSION_CNAD_VIC,
            self::PACKAGE_VERSION_CNAD_INTL_EP,
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['isResale'] = isset($data['isResale']) ? $data['isResale'] : null;
        $this->container['packageVersion'] = isset($data['packageVersion']) ? $data['packageVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 128)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ip']) < 7)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if (($this->container['status'] > 2)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 2.";
            }
            if (($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 255)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['packageId'] === null) {
            $invalidProperties[] = "'packageId' can't be null";
        }
            if ((mb_strlen($this->container['packageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['packageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['packageName'] === null) {
            $invalidProperties[] = "'packageName' can't be null";
        }
            if ((mb_strlen($this->container['packageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['packageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 255)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) < 1)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 255)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['isResale'] === null) {
            $invalidProperties[] = "'isResale' can't be null";
        }
        if ($this->container['packageVersion'] === null) {
            $invalidProperties[] = "'packageVersion' can't be null";
        }
            $allowedValues = $this->getPackageVersionAllowableValues();
                if (!is_null($this->container['packageVersion']) && !in_array($this->container['packageVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'packageVersion', must be one of '%s'",
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
    *  防护IP的Id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 防护IP的Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ip
    *  防护IP
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 防护IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets type
    *  类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 类型。VPN：VPN；NAT：NAT；VIP：VIP；CCI：CCI；EIP：弹性公网IP；ELB：弹性负载均衡；REROUTING_IP：REROUTING_IP；SubEni：SubEni；NetInterFace：NetInterFace；
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  名字
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
    * @param string|null $name 名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 状态：0 - 正常， 1 - 清洗中， 2 - 黑洞中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusDetail
    *  statusDetail
    *
    * @return \HuaweiCloud\SDK\Aad\V1\Model\IpStatusDetail|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param \HuaweiCloud\SDK\Aad\V1\Model\IpStatusDetail|null $statusDetail statusDetail
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets region
    *  所属region
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 所属region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets packageId
    *  防护包id
    *
    * @return string
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string $packageId 防护包id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets packageName
    *  防护包名
    *
    * @return string
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string $packageName 防护包名
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets tags
    *  TMS标签
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags TMS标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tag
    *  本地标签
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 本地标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets isResale
    *  默认false，表示是否转售版的IP，不需要展示策略和报表
    *
    * @return bool
    */
    public function getIsResale()
    {
        return $this->container['isResale'];
    }

    /**
    * Sets isResale
    *
    * @param bool $isResale 默认false，表示是否转售版的IP，不需要展示策略和报表
    *
    * @return $this
    */
    public function setIsResale($isResale)
    {
        $this->container['isResale'] = $isResale;
        return $this;
    }

    /**
    * Gets packageVersion
    *  package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @return string
    */
    public function getPackageVersion()
    {
        return $this->container['packageVersion'];
    }

    /**
    * Sets packageVersion
    *
    * @param string $packageVersion package_version。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @return $this
    */
    public function setPackageVersion($packageVersion)
    {
        $this->container['packageVersion'] = $packageVersion;
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

