<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsApproveLogVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsApproveLogVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * creatorId  创建者Id
    * creatorName  创建者名称
    * domainAlias  租户别名
    * domainName  租户名称
    * league  league
    * leagueId  联盟Id
    * leagueName  联盟名称
    * partnerId  联盟参与方Id
    * partnerStatus  联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    * partners  partners
    * updateId  更新者Id
    * updateName  更新者名称
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => '\DateTime',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'domainAlias' => 'string',
            'domainName' => 'string',
            'league' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsLeagueNoticeVo',
            'leagueId' => 'string',
            'leagueName' => 'string',
            'partnerId' => 'string',
            'partnerStatus' => 'string',
            'partners' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsLeaguePartnerVo[]',
            'updateId' => 'string',
            'updateName' => 'string',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * creatorId  创建者Id
    * creatorName  创建者名称
    * domainAlias  租户别名
    * domainName  租户名称
    * league  league
    * leagueId  联盟Id
    * leagueName  联盟名称
    * partnerId  联盟参与方Id
    * partnerStatus  联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    * partners  partners
    * updateId  更新者Id
    * updateName  更新者名称
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'date-time',
        'creatorId' => null,
        'creatorName' => null,
        'domainAlias' => null,
        'domainName' => null,
        'league' => null,
        'leagueId' => null,
        'leagueName' => null,
        'partnerId' => null,
        'partnerStatus' => null,
        'partners' => null,
        'updateId' => null,
        'updateName' => null,
        'updateTime' => 'date-time'
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
    * createTime  创建时间
    * creatorId  创建者Id
    * creatorName  创建者名称
    * domainAlias  租户别名
    * domainName  租户名称
    * league  league
    * leagueId  联盟Id
    * leagueName  联盟名称
    * partnerId  联盟参与方Id
    * partnerStatus  联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    * partners  partners
    * updateId  更新者Id
    * updateName  更新者名称
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'domainAlias' => 'domain_alias',
            'domainName' => 'domain_name',
            'league' => 'league',
            'leagueId' => 'league_id',
            'leagueName' => 'league_name',
            'partnerId' => 'partner_id',
            'partnerStatus' => 'partner_status',
            'partners' => 'partners',
            'updateId' => 'update_id',
            'updateName' => 'update_name',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * creatorId  创建者Id
    * creatorName  创建者名称
    * domainAlias  租户别名
    * domainName  租户名称
    * league  league
    * leagueId  联盟Id
    * leagueName  联盟名称
    * partnerId  联盟参与方Id
    * partnerStatus  联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    * partners  partners
    * updateId  更新者Id
    * updateName  更新者名称
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'domainAlias' => 'setDomainAlias',
            'domainName' => 'setDomainName',
            'league' => 'setLeague',
            'leagueId' => 'setLeagueId',
            'leagueName' => 'setLeagueName',
            'partnerId' => 'setPartnerId',
            'partnerStatus' => 'setPartnerStatus',
            'partners' => 'setPartners',
            'updateId' => 'setUpdateId',
            'updateName' => 'setUpdateName',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * creatorId  创建者Id
    * creatorName  创建者名称
    * domainAlias  租户别名
    * domainName  租户名称
    * league  league
    * leagueId  联盟Id
    * leagueName  联盟名称
    * partnerId  联盟参与方Id
    * partnerStatus  联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    * partners  partners
    * updateId  更新者Id
    * updateName  更新者名称
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'domainAlias' => 'getDomainAlias',
            'domainName' => 'getDomainName',
            'league' => 'getLeague',
            'leagueId' => 'getLeagueId',
            'leagueName' => 'getLeagueName',
            'partnerId' => 'getPartnerId',
            'partnerStatus' => 'getPartnerStatus',
            'partners' => 'getPartners',
            'updateId' => 'getUpdateId',
            'updateName' => 'getUpdateName',
            'updateTime' => 'getUpdateTime'
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
    const PARTNER_STATUS_JOINED = 'JOINED';
    const PARTNER_STATUS_JOIN_PENDING_APPROVAL = 'JOIN_PENDING_APPROVAL';
    const PARTNER_STATUS_JOIN_REJECTED = 'JOIN_REJECTED';
    const PARTNER_STATUS_QUIT = 'QUIT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPartnerStatusAllowableValues()
    {
        return [
            self::PARTNER_STATUS_JOINED,
            self::PARTNER_STATUS_JOIN_PENDING_APPROVAL,
            self::PARTNER_STATUS_JOIN_REJECTED,
            self::PARTNER_STATUS_QUIT,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['domainAlias'] = isset($data['domainAlias']) ? $data['domainAlias'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['league'] = isset($data['league']) ? $data['league'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['leagueName'] = isset($data['leagueName']) ? $data['leagueName'] : null;
        $this->container['partnerId'] = isset($data['partnerId']) ? $data['partnerId'] : null;
        $this->container['partnerStatus'] = isset($data['partnerStatus']) ? $data['partnerStatus'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['updateId'] = isset($data['updateId']) ? $data['updateId'] : null;
        $this->container['updateName'] = isset($data['updateName']) ? $data['updateName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPartnerStatusAllowableValues();
                if (!is_null($this->container['partnerStatus']) && !in_array($this->container['partnerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'partnerStatus', must be one of '%s'",
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
    * Gets createTime
    *  创建时间
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
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者Id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者Id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets domainAlias
    *  租户别名
    *
    * @return string|null
    */
    public function getDomainAlias()
    {
        return $this->container['domainAlias'];
    }

    /**
    * Sets domainAlias
    *
    * @param string|null $domainAlias 租户别名
    *
    * @return $this
    */
    public function setDomainAlias($domainAlias)
    {
        $this->container['domainAlias'] = $domainAlias;
        return $this;
    }

    /**
    * Gets domainName
    *  租户名称
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 租户名称
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets league
    *  league
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsLeagueNoticeVo|null
    */
    public function getLeague()
    {
        return $this->container['league'];
    }

    /**
    * Sets league
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsLeagueNoticeVo|null $league league
    *
    * @return $this
    */
    public function setLeague($league)
    {
        $this->container['league'] = $league;
        return $this;
    }

    /**
    * Gets leagueId
    *  联盟Id
    *
    * @return string|null
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string|null $leagueId 联盟Id
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
        return $this;
    }

    /**
    * Gets leagueName
    *  联盟名称
    *
    * @return string|null
    */
    public function getLeagueName()
    {
        return $this->container['leagueName'];
    }

    /**
    * Sets leagueName
    *
    * @param string|null $leagueName 联盟名称
    *
    * @return $this
    */
    public function setLeagueName($leagueName)
    {
        $this->container['leagueName'] = $leagueName;
        return $this;
    }

    /**
    * Gets partnerId
    *  联盟参与方Id
    *
    * @return string|null
    */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
    * Sets partnerId
    *
    * @param string|null $partnerId 联盟参与方Id
    *
    * @return $this
    */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;
        return $this;
    }

    /**
    * Gets partnerStatus
    *  联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    *
    * @return string|null
    */
    public function getPartnerStatus()
    {
        return $this->container['partnerStatus'];
    }

    /**
    * Sets partnerStatus
    *
    * @param string|null $partnerStatus 联盟参与方状态，JOINED.已加入，JOIN_PENDING_APPROVAL.待审核，JOIN_REJECTED.拒绝加入，QUIT.已退出
    *
    * @return $this
    */
    public function setPartnerStatus($partnerStatus)
    {
        $this->container['partnerStatus'] = $partnerStatus;
        return $this;
    }

    /**
    * Gets partners
    *  partners
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsLeaguePartnerVo[]|null
    */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
    * Sets partners
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsLeaguePartnerVo[]|null $partners partners
    *
    * @return $this
    */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;
        return $this;
    }

    /**
    * Gets updateId
    *  更新者Id
    *
    * @return string|null
    */
    public function getUpdateId()
    {
        return $this->container['updateId'];
    }

    /**
    * Sets updateId
    *
    * @param string|null $updateId 更新者Id
    *
    * @return $this
    */
    public function setUpdateId($updateId)
    {
        $this->container['updateId'] = $updateId;
        return $this;
    }

    /**
    * Gets updateName
    *  更新者名称
    *
    * @return string|null
    */
    public function getUpdateName()
    {
        return $this->container['updateName'];
    }

    /**
    * Sets updateName
    *
    * @param string|null $updateName 更新者名称
    *
    * @return $this
    */
    public function setUpdateName($updateName)
    {
        $this->container['updateName'] = $updateName;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

