<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolUpdateExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolUpdateExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agencyName  **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * spotPrice  **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agencyName' => 'string',
            'alphaCcePreInstall' => 'string',
            'alphaCcePostInstall' => 'string',
            'spotPrice' => 'string',
            'securityReinforcementType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agencyName  **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * spotPrice  **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agencyName' => null,
        'alphaCcePreInstall' => null,
        'alphaCcePostInstall' => null,
        'spotPrice' => null,
        'securityReinforcementType' => null
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
    * agencyName  **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * spotPrice  **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agencyName' => 'agency_name',
            'alphaCcePreInstall' => 'alpha.cce/preInstall',
            'alphaCcePostInstall' => 'alpha.cce/postInstall',
            'spotPrice' => 'spotPrice',
            'securityReinforcementType' => 'securityReinforcementType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agencyName  **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * spotPrice  **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'agencyName' => 'setAgencyName',
            'alphaCcePreInstall' => 'setAlphaCcePreInstall',
            'alphaCcePostInstall' => 'setAlphaCcePostInstall',
            'spotPrice' => 'setSpotPrice',
            'securityReinforcementType' => 'setSecurityReinforcementType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agencyName  **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * spotPrice  **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'agencyName' => 'getAgencyName',
            'alphaCcePreInstall' => 'getAlphaCcePreInstall',
            'alphaCcePostInstall' => 'getAlphaCcePostInstall',
            'spotPrice' => 'getSpotPrice',
            'securityReinforcementType' => 'getSecurityReinforcementType'
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
    const SECURITY_REINFORCEMENT_TYPE_NULL = 'null';
    const SECURITY_REINFORCEMENT_TYPE_CYBERSECURITY = 'cybersecurity';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecurityReinforcementTypeAllowableValues()
    {
        return [
            self::SECURITY_REINFORCEMENT_TYPE_NULL,
            self::SECURITY_REINFORCEMENT_TYPE_CYBERSECURITY,
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
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['alphaCcePreInstall'] = isset($data['alphaCcePreInstall']) ? $data['alphaCcePreInstall'] : null;
        $this->container['alphaCcePostInstall'] = isset($data['alphaCcePostInstall']) ? $data['alphaCcePostInstall'] : null;
        $this->container['spotPrice'] = isset($data['spotPrice']) ? $data['spotPrice'] : null;
        $this->container['securityReinforcementType'] = isset($data['securityReinforcementType']) ? $data['securityReinforcementType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSecurityReinforcementTypeAllowableValues();
                if (!is_null($this->container['securityReinforcementType']) && !in_array($this->container['securityReinforcementType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'securityReinforcementType', must be one of '%s'",
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
    * Gets agencyName
    *  **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName **参数解释**： 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and AccessManagement，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 **约束限制**： 作为响应参数仅在创建节点传入时返回该字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets alphaCcePreInstall
    *  **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    *
    * @return string|null
    */
    public function getAlphaCcePreInstall()
    {
        return $this->container['alphaCcePreInstall'];
    }

    /**
    * Sets alphaCcePreInstall
    *
    * @param string|null $alphaCcePreInstall **参数解释**： 安装前执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```   **约束限制**：  安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。  **取值范围：**  不涉及  **默认取值：**  不涉及
    *
    * @return $this
    */
    public function setAlphaCcePreInstall($alphaCcePreInstall)
    {
        $this->container['alphaCcePreInstall'] = $alphaCcePreInstall;
        return $this;
    }

    /**
    * Gets alphaCcePostInstall
    *  **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAlphaCcePostInstall()
    {
        return $this->container['alphaCcePostInstall'];
    }

    /**
    * Sets alphaCcePostInstall
    *
    * @param string|null $alphaCcePostInstall **参数解释**： 安装后执行脚本。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAlphaCcePostInstall($alphaCcePostInstall)
    {
        $this->container['alphaCcePostInstall'] = $alphaCcePostInstall;
        return $this;
    }

    /**
    * Gets spotPrice
    *  **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSpotPrice()
    {
        return $this->container['spotPrice'];
    }

    /**
    * Sets spotPrice
    *
    * @param string|null $spotPrice **参数解释**： 用户愿意为竞价实例每小时支付的最高价格。 **约束限制**： - 仅billingMode=0且marketType=spot时，该参数设置后生效。 - 当billingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。 - spotPrice需要小于等于按需价格并大于等于云服务器市场价格。  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSpotPrice($spotPrice)
    {
        $this->container['spotPrice'] = $spotPrice;
        return $this;
    }

    /**
    * Gets securityReinforcementType
    *  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getSecurityReinforcementType()
    {
        return $this->container['securityReinforcementType'];
    }

    /**
    * Sets securityReinforcementType
    *
    * @param string|null $securityReinforcementType **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSecurityReinforcementType($securityReinforcementType)
    {
        $this->container['securityReinforcementType'] = $securityReinforcementType;
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

