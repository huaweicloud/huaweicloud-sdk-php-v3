<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssumeAgencyWithOIDCReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssumeAgencyWithOIDCReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * durationSeconds  **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
    * policy  **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * policyIds  **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * providerUrn  **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencyUrn  **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencySessionName  **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * idToken  **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'durationSeconds' => 'int',
            'policy' => 'string',
            'policyIds' => 'string[]',
            'providerUrn' => 'string',
            'agencyUrn' => 'string',
            'agencySessionName' => 'string',
            'idToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * durationSeconds  **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
    * policy  **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * policyIds  **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * providerUrn  **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencyUrn  **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencySessionName  **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * idToken  **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'durationSeconds' => 'int32',
        'policy' => null,
        'policyIds' => null,
        'providerUrn' => null,
        'agencyUrn' => null,
        'agencySessionName' => null,
        'idToken' => null
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
    * durationSeconds  **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
    * policy  **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * policyIds  **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * providerUrn  **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencyUrn  **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencySessionName  **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * idToken  **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'durationSeconds' => 'duration_seconds',
            'policy' => 'policy',
            'policyIds' => 'policy_ids',
            'providerUrn' => 'provider_urn',
            'agencyUrn' => 'agency_urn',
            'agencySessionName' => 'agency_session_name',
            'idToken' => 'id_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * durationSeconds  **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
    * policy  **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * policyIds  **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * providerUrn  **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencyUrn  **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencySessionName  **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * idToken  **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'durationSeconds' => 'setDurationSeconds',
            'policy' => 'setPolicy',
            'policyIds' => 'setPolicyIds',
            'providerUrn' => 'setProviderUrn',
            'agencyUrn' => 'setAgencyUrn',
            'agencySessionName' => 'setAgencySessionName',
            'idToken' => 'setIdToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * durationSeconds  **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
    * policy  **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * policyIds  **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * providerUrn  **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencyUrn  **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * agencySessionName  **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * idToken  **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'durationSeconds' => 'getDurationSeconds',
            'policy' => 'getPolicy',
            'policyIds' => 'getPolicyIds',
            'providerUrn' => 'getProviderUrn',
            'agencyUrn' => 'getAgencyUrn',
            'agencySessionName' => 'getAgencySessionName',
            'idToken' => 'getIdToken'
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['policyIds'] = isset($data['policyIds']) ? $data['policyIds'] : null;
        $this->container['providerUrn'] = isset($data['providerUrn']) ? $data['providerUrn'] : null;
        $this->container['agencyUrn'] = isset($data['agencyUrn']) ? $data['agencyUrn'] : null;
        $this->container['agencySessionName'] = isset($data['agencySessionName']) ? $data['agencySessionName'] : null;
        $this->container['idToken'] = isset($data['idToken']) ? $data['idToken'] : null;
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
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) > 2048)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) < 2)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['providerUrn'] === null) {
            $invalidProperties[] = "'providerUrn' can't be null";
        }
            if ((mb_strlen($this->container['providerUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'providerUrn', the character length must be smaller than or equal to 1500.";
            }
            if (!preg_match("/^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+$/", $this->container['providerUrn'])) {
                $invalidProperties[] = "invalid value for 'providerUrn', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+$/.";
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
        if ($this->container['idToken'] === null) {
            $invalidProperties[] = "'idToken' can't be null";
        }
            if ((mb_strlen($this->container['idToken']) > 20000)) {
                $invalidProperties[] = "invalid value for 'idToken', the character length must be smaller than or equal to 20000.";
            }
            if ((mb_strlen($this->container['idToken']) < 4)) {
                $invalidProperties[] = "invalid value for 'idToken', the character length must be bigger than or equal to 4.";
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
    *  **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
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
    * @param int|null $durationSeconds **参数解释**： 获得的临时安全凭证的有效时间（单位：秒）。  **约束限制**： 请注意，该时间需要小于委托本身设置的最大会话持续时间，同时在携带X-Security-Token的Header头时该时间不能超过3600秒。  **取值范围**： 取值范围为[900,43200]。  **默认取值**： 默认值为3600。
    *
    * @return $this
    */
    public function setDurationSeconds($durationSeconds)
    {
        $this->container['durationSeconds'] = $durationSeconds;
        return $this;
    }

    /**
    * Gets policy
    *  **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
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
    * @param string|null $policy **参数解释**： 自定义策略，限制本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。  **约束限制**： 本次会话获得的临时安全凭证的权限范围不会超过该自定义策略指定的权限。 长度范围为[2,2048]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
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
    *  **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
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
    * @param string[]|null $policyIds **参数解释**： 预置策略列表，限制本次会话获得的临时安全凭证的权限范围不会超过该预置策略指定的权限。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPolicyIds($policyIds)
    {
        $this->container['policyIds'] = $policyIds;
        return $this;
    }

    /**
    * Gets providerUrn
    *  **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getProviderUrn()
    {
        return $this->container['providerUrn'];
    }

    /**
    * Sets providerUrn
    *
    * @param string $providerUrn **参数解释**： OIDC提供商的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProviderUrn($providerUrn)
    {
        $this->container['providerUrn'] = $providerUrn;
        return $this;
    }

    /**
    * Gets agencyUrn
    *  **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
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
    * @param string $agencyUrn **参数解释**： 目标信任委托的URN。  **约束限制**： 长度范围为[0,1500]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
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
    *  **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
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
    * @param string $agencySessionName **参数解释**： 信任委托会话的会话名。  **约束限制**： 长度范围为[2,128]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAgencySessionName($agencySessionName)
    {
        $this->container['agencySessionName'] = $agencySessionName;
        return $this;
    }

    /**
    * Gets idToken
    *  **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getIdToken()
    {
        return $this->container['idToken'];
    }

    /**
    * Sets idToken
    *
    * @param string $idToken **参数解释**： 由身份提供商提供的OIDC令牌。  **约束限制**： 长度范围为[4,20000]。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIdToken($idToken)
    {
        $this->container['idToken'] = $idToken;
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

