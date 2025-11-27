<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCertificatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCertificatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * adminStateUp  **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * commonName  **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * fingerprint  **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    * protectionStatus  **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'adminStateUp' => 'bool',
            'domain' => 'string[]',
            'type' => 'string[]',
            'scmCertificateId' => 'string[]',
            'commonName' => 'string[]',
            'fingerprint' => 'string[]',
            'source' => 'string[]',
            'protectionStatus' => 'string[]',
            'protectionReason' => 'string[]',
            'enterpriseProjectId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * adminStateUp  **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * commonName  **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * fingerprint  **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    * protectionStatus  **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'domain' => null,
        'type' => null,
        'scmCertificateId' => null,
        'commonName' => null,
        'fingerprint' => null,
        'source' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'enterpriseProjectId' => null
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
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * adminStateUp  **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * commonName  **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * fingerprint  **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    * protectionStatus  **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'domain' => 'domain',
            'type' => 'type',
            'scmCertificateId' => 'scm_certificate_id',
            'commonName' => 'common_name',
            'fingerprint' => 'fingerprint',
            'source' => 'source',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * adminStateUp  **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * commonName  **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * fingerprint  **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    * protectionStatus  **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'domain' => 'setDomain',
            'type' => 'setType',
            'scmCertificateId' => 'setScmCertificateId',
            'commonName' => 'setCommonName',
            'fingerprint' => 'setFingerprint',
            'source' => 'setSource',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * adminStateUp  **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * commonName  **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * fingerprint  **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    * protectionStatus  **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'domain' => 'getDomain',
            'type' => 'getType',
            'scmCertificateId' => 'getScmCertificateId',
            'commonName' => 'getCommonName',
            'fingerprint' => 'getFingerprint',
            'source' => 'getSource',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scmCertificateId'] = isset($data['scmCertificateId']) ? $data['scmCertificateId'] : null;
        $this->container['commonName'] = isset($data['commonName']) ? $data['commonName'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets marker
    *  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id **参数解释**：证书ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name **参数解释**：证书的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description **参数解释**：证书的描述。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp **参数解释**：证书的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets domain
    *  **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string[]|null $domain **参数解释**：服务器证书所签域名。 支持多值查询，查询条件格式：domain=xxx&domain=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type **参数解释**：证书的类型。 支持多值查询，查询条件格式：type=xxx&type=xxx。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getScmCertificateId()
    {
        return $this->container['scmCertificateId'];
    }

    /**
    * Sets scmCertificateId
    *
    * @param string[]|null $scmCertificateId **参数解释**：云证书与管理服务（CCM）中的证书ID。 支持多值查询，查询条件格式：scm_certificate_id=xxx&scm_certificate_id=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setScmCertificateId($scmCertificateId)
    {
        $this->container['scmCertificateId'] = $scmCertificateId;
        return $this;
    }

    /**
    * Gets commonName
    *  **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getCommonName()
    {
        return $this->container['commonName'];
    }

    /**
    * Sets commonName
    *
    * @param string[]|null $commonName **参数解释**：证书的主域名。 支持多值查询，查询条件格式：common_name=xxx&common_name=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setCommonName($commonName)
    {
        $this->container['commonName'] = $commonName;
        return $this;
    }

    /**
    * Gets fingerprint
    *  **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string[]|null $fingerprint **参数解释**：证书的指纹。 支持多值查询，查询条件格式：fingerprint=xxx&fingerprint=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string[]|null $source **参数解释**：证书来源。 支持多值查询，查询条件格式：source=xxx&source=xxx。  **约束限制**：不涉及  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string[]|null $protectionStatus **参数解释**：修改保护状态。 支持多值查询，查询条件格式：protection_status=xxx&protection_status=xxx。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string[]|null $protectionReason **参数解释**：设置修改保护的原因。 支持多值查询，查询条件格式：protection_reason=xxx&protection_reason=xxx。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:certificates:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

