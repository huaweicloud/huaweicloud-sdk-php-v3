<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssumeAgencyReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssumeAgencyReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * durationSeconds  获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    * externalId  外部ID，防止混淆代理人问题。
    * policy  自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    * policyIds  预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    * agencyUrn  目标委托的URN。
    * agencySessionName  委托会话的会话名。
    * serialNumber  调用者绑定的MFA设备的序列号。
    * tokenCode  调用者绑定的MFA设备上的6位数字码。
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * tags  自定义标签列表。
    * transitiveTagKeys  随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'durationSeconds' => 'int',
            'externalId' => 'string',
            'policy' => 'string',
            'policyIds' => 'string[]',
            'agencyUrn' => 'string',
            'agencySessionName' => 'string',
            'serialNumber' => 'string',
            'tokenCode' => 'string',
            'sourceIdentity' => 'string',
            'tags' => '\HuaweiCloud\SDK\Sts\V1\Model\TagDto[]',
            'transitiveTagKeys' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * durationSeconds  获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    * externalId  外部ID，防止混淆代理人问题。
    * policy  自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    * policyIds  预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    * agencyUrn  目标委托的URN。
    * agencySessionName  委托会话的会话名。
    * serialNumber  调用者绑定的MFA设备的序列号。
    * tokenCode  调用者绑定的MFA设备上的6位数字码。
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * tags  自定义标签列表。
    * transitiveTagKeys  随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'durationSeconds' => 'int32',
        'externalId' => null,
        'policy' => null,
        'policyIds' => null,
        'agencyUrn' => null,
        'agencySessionName' => null,
        'serialNumber' => null,
        'tokenCode' => null,
        'sourceIdentity' => null,
        'tags' => null,
        'transitiveTagKeys' => null
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
    * durationSeconds  获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    * externalId  外部ID，防止混淆代理人问题。
    * policy  自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    * policyIds  预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    * agencyUrn  目标委托的URN。
    * agencySessionName  委托会话的会话名。
    * serialNumber  调用者绑定的MFA设备的序列号。
    * tokenCode  调用者绑定的MFA设备上的6位数字码。
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * tags  自定义标签列表。
    * transitiveTagKeys  随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'durationSeconds' => 'duration_seconds',
            'externalId' => 'external_id',
            'policy' => 'policy',
            'policyIds' => 'policy_ids',
            'agencyUrn' => 'agency_urn',
            'agencySessionName' => 'agency_session_name',
            'serialNumber' => 'serial_number',
            'tokenCode' => 'token_code',
            'sourceIdentity' => 'source_identity',
            'tags' => 'tags',
            'transitiveTagKeys' => 'transitive_tag_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * durationSeconds  获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    * externalId  外部ID，防止混淆代理人问题。
    * policy  自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    * policyIds  预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    * agencyUrn  目标委托的URN。
    * agencySessionName  委托会话的会话名。
    * serialNumber  调用者绑定的MFA设备的序列号。
    * tokenCode  调用者绑定的MFA设备上的6位数字码。
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * tags  自定义标签列表。
    * transitiveTagKeys  随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'durationSeconds' => 'setDurationSeconds',
            'externalId' => 'setExternalId',
            'policy' => 'setPolicy',
            'policyIds' => 'setPolicyIds',
            'agencyUrn' => 'setAgencyUrn',
            'agencySessionName' => 'setAgencySessionName',
            'serialNumber' => 'setSerialNumber',
            'tokenCode' => 'setTokenCode',
            'sourceIdentity' => 'setSourceIdentity',
            'tags' => 'setTags',
            'transitiveTagKeys' => 'setTransitiveTagKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * durationSeconds  获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    * externalId  外部ID，防止混淆代理人问题。
    * policy  自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    * policyIds  预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    * agencyUrn  目标委托的URN。
    * agencySessionName  委托会话的会话名。
    * serialNumber  调用者绑定的MFA设备的序列号。
    * tokenCode  调用者绑定的MFA设备上的6位数字码。
    * sourceIdentity  调用链里最初调用者所声明的身份。
    * tags  自定义标签列表。
    * transitiveTagKeys  随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'durationSeconds' => 'getDurationSeconds',
            'externalId' => 'getExternalId',
            'policy' => 'getPolicy',
            'policyIds' => 'getPolicyIds',
            'agencyUrn' => 'getAgencyUrn',
            'agencySessionName' => 'getAgencySessionName',
            'serialNumber' => 'getSerialNumber',
            'tokenCode' => 'getTokenCode',
            'sourceIdentity' => 'getSourceIdentity',
            'tags' => 'getTags',
            'transitiveTagKeys' => 'getTransitiveTagKeys'
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
        $this->container['durationSeconds'] = isset($data['durationSeconds']) ? $data['durationSeconds'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['policyIds'] = isset($data['policyIds']) ? $data['policyIds'] : null;
        $this->container['agencyUrn'] = isset($data['agencyUrn']) ? $data['agencyUrn'] : null;
        $this->container['agencySessionName'] = isset($data['agencySessionName']) ? $data['agencySessionName'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['tokenCode'] = isset($data['tokenCode']) ? $data['tokenCode'] : null;
        $this->container['sourceIdentity'] = isset($data['sourceIdentity']) ? $data['sourceIdentity'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['transitiveTagKeys'] = isset($data['transitiveTagKeys']) ? $data['transitiveTagKeys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] > 43200)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] < 900)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be bigger than or equal to 900.";
            }
            if (!is_null($this->container['externalId']) && (mb_strlen($this->container['externalId']) > 1224)) {
                $invalidProperties[] = "invalid value for 'externalId', the character length must be smaller than or equal to 1224.";
            }
            if (!is_null($this->container['externalId']) && (mb_strlen($this->container['externalId']) < 2)) {
                $invalidProperties[] = "invalid value for 'externalId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['externalId']) && !preg_match("/^[\\w+=,.@:\/-]*$/", $this->container['externalId'])) {
                $invalidProperties[] = "invalid value for 'externalId', must be conform to the pattern /^[\\w+=,.@:\/-]*$/.";
            }
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) > 2048)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) < 2)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['agencyUrn'] === null) {
            $invalidProperties[] = "'agencyUrn' can't be null";
        }
            if ((mb_strlen($this->container['agencyUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'agencyUrn', the character length must be smaller than or equal to 1500.";
            }
        if ($this->container['agencySessionName'] === null) {
            $invalidProperties[] = "'agencySessionName' can't be null";
        }
            if ((mb_strlen($this->container['agencySessionName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agencySessionName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['agencySessionName']) < 2)) {
                $invalidProperties[] = "invalid value for 'agencySessionName', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^[\\w+=,.@-]*$/", $this->container['agencySessionName'])) {
                $invalidProperties[] = "invalid value for 'agencySessionName', must be conform to the pattern /^[\\w+=,.@-]*$/.";
            }
            if (!is_null($this->container['serialNumber']) && (mb_strlen($this->container['serialNumber']) > 256)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['serialNumber']) && (mb_strlen($this->container['serialNumber']) < 9)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be bigger than or equal to 9.";
            }
            if (!is_null($this->container['serialNumber']) && !preg_match("/^[\\w+=\/:,.@-]*$/", $this->container['serialNumber'])) {
                $invalidProperties[] = "invalid value for 'serialNumber', must be conform to the pattern /^[\\w+=\/:,.@-]*$/.";
            }
            if (!is_null($this->container['tokenCode']) && (mb_strlen($this->container['tokenCode']) > 6)) {
                $invalidProperties[] = "invalid value for 'tokenCode', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['tokenCode']) && (mb_strlen($this->container['tokenCode']) < 6)) {
                $invalidProperties[] = "invalid value for 'tokenCode', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['tokenCode']) && !preg_match("/^[\\d]{6,6}$/", $this->container['tokenCode'])) {
                $invalidProperties[] = "invalid value for 'tokenCode', must be conform to the pattern /^[\\d]{6,6}$/.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceIdentity']) && !preg_match("/^[\\w+=,.@-]*$/", $this->container['sourceIdentity'])) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', must be conform to the pattern /^[\\w+=,.@-]*$/.";
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
    * Gets durationSeconds
    *  获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    *
    * @return int|null
    */
    public function getDurationSeconds()
    {
        return $this->container['durationSeconds'];
    }

    /**
    * Sets durationSeconds
    *
    * @param int|null $durationSeconds 获得的临时安全凭证的有效时间（单位秒）。请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。
    *
    * @return $this
    */
    public function setDurationSeconds($durationSeconds)
    {
        $this->container['durationSeconds'] = $durationSeconds;
        return $this;
    }

    /**
    * Gets externalId
    *  外部ID，防止混淆代理人问题。
    *
    * @return string|null
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param string|null $externalId 外部ID，防止混淆代理人问题。
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets policy
    *  自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets policyIds
    *  预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    *
    * @return string[]|null
    */
    public function getPolicyIds()
    {
        return $this->container['policyIds'];
    }

    /**
    * Sets policyIds
    *
    * @param string[]|null $policyIds 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。
    *
    * @return $this
    */
    public function setPolicyIds($policyIds)
    {
        $this->container['policyIds'] = $policyIds;
        return $this;
    }

    /**
    * Gets agencyUrn
    *  目标委托的URN。
    *
    * @return string
    */
    public function getAgencyUrn()
    {
        return $this->container['agencyUrn'];
    }

    /**
    * Sets agencyUrn
    *
    * @param string $agencyUrn 目标委托的URN。
    *
    * @return $this
    */
    public function setAgencyUrn($agencyUrn)
    {
        $this->container['agencyUrn'] = $agencyUrn;
        return $this;
    }

    /**
    * Gets agencySessionName
    *  委托会话的会话名。
    *
    * @return string
    */
    public function getAgencySessionName()
    {
        return $this->container['agencySessionName'];
    }

    /**
    * Sets agencySessionName
    *
    * @param string $agencySessionName 委托会话的会话名。
    *
    * @return $this
    */
    public function setAgencySessionName($agencySessionName)
    {
        $this->container['agencySessionName'] = $agencySessionName;
        return $this;
    }

    /**
    * Gets serialNumber
    *  调用者绑定的MFA设备的序列号。
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 调用者绑定的MFA设备的序列号。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets tokenCode
    *  调用者绑定的MFA设备上的6位数字码。
    *
    * @return string|null
    */
    public function getTokenCode()
    {
        return $this->container['tokenCode'];
    }

    /**
    * Sets tokenCode
    *
    * @param string|null $tokenCode 调用者绑定的MFA设备上的6位数字码。
    *
    * @return $this
    */
    public function setTokenCode($tokenCode)
    {
        $this->container['tokenCode'] = $tokenCode;
        return $this;
    }

    /**
    * Gets sourceIdentity
    *  调用链里最初调用者所声明的身份。
    *
    * @return string|null
    */
    public function getSourceIdentity()
    {
        return $this->container['sourceIdentity'];
    }

    /**
    * Sets sourceIdentity
    *
    * @param string|null $sourceIdentity 调用链里最初调用者所声明的身份。
    *
    * @return $this
    */
    public function setSourceIdentity($sourceIdentity)
    {
        $this->container['sourceIdentity'] = $sourceIdentity;
        return $this;
    }

    /**
    * Gets tags
    *  自定义标签列表。
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\TagDto[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\TagDto[]|null $tags 自定义标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets transitiveTagKeys
    *  随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @return string[]|null
    */
    public function getTransitiveTagKeys()
    {
        return $this->container['transitiveTagKeys'];
    }

    /**
    * Sets transitiveTagKeys
    *
    * @param string[]|null $transitiveTagKeys 随着临时安全凭证调用链持续透传的标签键列表。
    *
    * @return $this
    */
    public function setTransitiveTagKeys($transitiveTagKeys)
    {
        $this->container['transitiveTagKeys'] = $transitiveTagKeys;
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

